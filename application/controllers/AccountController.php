<?php

namespace application\controllers;
use application\core\Controller;

//use PDOException; // or backslash before a function for call the function
class AccountController extends Controller
{

    private $result_msg; // for query result(error/access)

	public function loginAction() // authorize page
    {

        if (isset($_POST['authorize'])) // for authorize
        {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $authorize = $this->model->signIn($email, $password);

            if (null !== $authorize)
            {
                // there is a session data must be here
                $_SESSION['email'] = $authorize['email'];
                $_SESSION['name'] = $authorize['name'];
                $_SESSION['surname'] = $authorize['surname'];

                $this->view->redirect('/');
            } else {
                $this->result_msg = 'Email or password is incorrect!';
//                echo 'Email or password is incorrect!';
            }

        }

        if (isset($_POST['logout'])) // for logout
        {
            session_unset();
        }

		$this->view->render('Log in', $this->result_msg);
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


            if ($this->validator->validRegister($name, $surname, $email, $password, $cpassword, $this->result_msg))
            {
                if (empty($gender)) $gender = null;
                if (empty($bday)) $bday = null;

                try
                {
                    $this->model->signUp($name, $surname, $email, $gender, $bday, $password);
                    $this->result_msg['success'] = 'You have been successfully registered:) <a href="/account/login">Log in?</a>';
//                    echo "<br><b>You have been successfully registered:) <a href='/account/login'>Log in?</a></b>";
                }
                catch (\PDOException $e) // duplicate key error(email): 1062
                {
                    $this->result_msg['error'] = 'This email already exists!';
//                    echo "<br><b>This email already exists!</b>"; // test
                }
            }
        }
		$this->view->render('Sign up', $this->result_msg);
    }

//	public function isRegisteredAction() // register processing
//    {
//
//    }
    }