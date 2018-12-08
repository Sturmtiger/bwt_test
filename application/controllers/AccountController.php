<?php

namespace application\controllers;
use application\core\Controller;

class AccountController extends Controller{

	public function loginAction() // authorize page
    {
        if (isset($_POST['authorize']))
        {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);


        }


        // $this->view->redirect('/'); // page redirection
		$this->view->render('Sign in');
	}

//    public function isAuthorizedAction() // authorization processing
//    {
//
//    }

	public function registerAction() // register page
    {
        if (isset($_POST['register']))
        {
            $name = ucfirst(trim($_POST['name']));
            $surname = ucfirst(trim($_POST['surname']));
            $email = trim($_POST['email']);
            $gender = trim($_POST['gender']);
            $bday = trim($_POST['bday']);
            $password1 = trim($_POST['password1']);
            $password2 = trim($_POST['password2']);

            if (empty($gender)) $gender = NULL;
            if (empty($bday)) $bday = NULL;

//            if $this->validator->validRegister() {}; // prepare validation and password encryption soon

            $this->model->signUp($name, $surname, $email, $gender, $bday, $password1);
        }



        // $this->view->redirect('/account/login'); // page redirection
		$this->view->render('Sign up');
    }

//	public function isRegisteredAction() // register processing
//    {
//
//    }
    }