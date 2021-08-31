<?php
namespace controllers;

use core\Auth;
use core\Controller;
use models\User;
use core\Session;
use core\Cookie;
//require_once 'models/User.php';

class SiteController extends Controller
{


    public function index()
    {

        Session::init();
        $welcome = '';
        if (Session::get('logged')) {
            $this->view->redirect(URL . 'user/show');


        } else {
            $welcome = 'Войдите, чтоб посмотреть профиль!';
        }
        $title = ['Главная', 0];

        $this->view->render('site/index', $welcome, $title);
    }

    public function login()
    {

        $title = ['login', 6];

        $loginDisabled = json_decode(Cookie::get(
            'loginDisable'), true);
//    var_dump($loginDisabled);
        if($loginDisabled['status']) {

            $this->view->render('site/login', $loginDisabled, $title);
        }
        Session::init();
        $info = Session::get('message');
        Session::remove('message');

        $this->view->render('site/login', $info, $title);

    }
    public function signin()
    {
        $info = [];
        if (isset($_POST['login']) && $_POST['login'] != '') {
            if (Auth::login($_POST)) {
                $this->view->redirect(URL . 'user/show');
            }
        }
        $this->view->redirect(URL . 'site/login');
    }


    public function logout()
    {
        Session::init();
        Session::destroy();

        $this->view->redirect(URL . 'site/index');
    }

}