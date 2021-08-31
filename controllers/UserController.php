<?php
namespace controllers;
use core\Controller;
use models\User;
use core\Session;
use core\Auth;

class UserController extends Controller{

	public function show(){

		$info = [];
			$user = new User();
            if($currentUser = Auth::isLogged()) {
				Session::get('logged');
                $title = [$currentUser['name'], 4];
                $this->view->render('user/show', $currentUser, $title);
            }

        $this->view->redirect(URL . 'site/login');

    }
}

