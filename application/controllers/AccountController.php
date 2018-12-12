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

            $result_msg = '';

            $authorize = $this->model->signIn($email, $password);
            if (null !== $authorize)
            {
                var_dump($authorize); // test

                // there is a session data must be here

//                $this->view->redirect('/');
            } else {
//                $result_msg = 'Email or password is incorrect!';
                echo 'Email or password is incorrect!';
            }


        }

//         $this->view->redirect('/'); // page redirection
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
            $password = trim($_POST['password']);
            $cpassword = trim($_POST['cpassword']);

            $result_msg = [];


            if ($this->validator->validRegister($name, $surname, $email, $password, $cpassword, $result_msg))
            {
                if (empty($gender)) $gender = null;
                if (empty($bday)) $bday = null;

                try
                {
                    $this->model->signUp($name, $surname, $email, $gender, $bday, $password);
//                    $result_msg['success'] = 'You have been successfully registered:) <a href='/account/login'>Log in?</a>';
                    echo "<br><b>You have been successfully registered:) <a href='/account/login'>Log in?</a></b>";
                }
                catch (\PDOException $e) // duplicate key error(email): 1062
                {
//                    $result_msg['error'] = 'This email already exists!';
                    echo "<br><b>This email already exists!</b>"; // test
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