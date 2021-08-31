<?php

namespace core;

use models\User;
use core\Session;

class Auth {

    public function user()
    {

    }

    public static function login($data)
    {
        Session::init();

        $user = new User();
        $currentUser = $user->check($_POST);
        if($currentUser) {
            Session::set('logged',['name' => $currentUser]);
            Session::remove('message');
            Session::remove('signCount');
            return $currentUser;
        } else {
            self::validateLogin();
        }

        return false;
    }

    public static function isLogged()
    {
        Session::init();

        return Session::get('logged');
    }

    private static function validateLogin()
    {
        $signCount = Session::get('signCount');
        $signCount++;
        Session::set('message', [
            'status' => 'error',
            'message' => 'Неверные данные',
        ]);

        if($signCount > 2) {
            $signCount= 0;
            Session::remove('message');
            Cookie::set(
                'loginDisable',
                json_encode([
                    'status' => 'disable',
                    'message' => 'Попробуйте еще раз через ' . TIME_DISABLE_LOGIN . ' секунд',
                ]),
                time() + TIME_DISABLE_LOGIN );

        }
        Session::set('signCount', $signCount );
    }

}