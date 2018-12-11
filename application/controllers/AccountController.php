<?php

namespace application\controllers;
use application\core\Controller;

//use PDOException; // or backslash before a function for call the function
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
            $name = mb_convert_case(trim($_POST['name']), MB_CASE_TITLE, "UTF-8");
            $surname = mb_convert_case(trim($_POST['surname']), MB_CASE_TITLE, "UTF-8");
            $email = trim($_POST['email']);
            $gender = $_POST['gender'];
            $bday = $_POST['bday'];
            $password1 = trim($_POST['password1']);
            $password2 = trim($_POST['password2']);

            $result_msg = '';

            if (empty($gender)) $gender = NULL;
            if (empty($bday)) $bday = NULL;

            if ($this->validator->validRegister($name, $surname, $email, $password1, $password2, $result_msg))
            {
                try
                {
                    $this->model->signUp($name, $surname, $email, $gender, $bday, $password1);
                }
                catch (\PDOException $e) // duplicate key error(email): 1062
                {
                    echo "<br><b>This email already exists</b>"; // test
                }
            }
        }



        // $this->view->redirect('/account/login'); // page redirection
		$this->view->render('Sign up');
    }

//	public function isRegisteredAction() // register processing
//    {
//
//    }
    }