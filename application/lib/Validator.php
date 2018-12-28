<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 06.12.2018
 * Time: 17:57
 */

namespace application\lib;


class Validator
{
    private function validPassword($password, $cpassword) // for register validation
    {
        if (strlen($password) < 10) return 'The length of the password must be not less than 10!';
        if ($password != $cpassword) return 'The passwords do not match!';
        if (preg_match('/ /', $password)) return 'The password must not contain whitespaces!';
        if (!preg_match('/[0-9]+/', $password)) return 'The password must contain at least 1 number!';
//        if (!preg_match('/[a-zA-Z]{3,}/', $password)) return 'The password must contain at least 3 letters!';
    }

    public function validRegister($name, $surname, $email, $password, $cpassword, &$result_msg)
    {
        if (!empty($name) && !empty($surname) && !empty($email) && !empty($password) && !empty($cpassword))
        {
            $valid_password = $this->validPassword($password, $cpassword); // password validation

            if (!preg_match('/^[a-zA-Zа-яА-Я]*$/u', $name)) // name validation(rus/en)
            {
                $result_msg['error'] = 'Invalid name format!';
//                echo 'Invalid name format!';
            }
            elseif (!preg_match('/^[a-zA-Zа-яА-Я- ]*$/u', $surname)) // surname validation(rus/en)
            {
                $result_msg['error'] = 'Invalid surname format!';
//                echo 'Invalid surname format!';
            }
            elseif (!filter_var("$email", FILTER_VALIDATE_EMAIL)) // email validation
            {
                $result_msg['error'] = 'Invalid email format!';
//                echo 'Invalid email format!';
            }
            elseif (null !== $valid_password) //password validation
            {
                $result_msg['error'] = $valid_password;
//                echo $valid_password;
            } else {
                return true;
            }
        } else {
            $result_msg['error'] = 'Fill all the fields!';
//            echo 'Fill all the fields!';
        }
        return false;
    }

    public function validFeedback($name, $email, $message, &$result_msg)
    {
        if (!empty($name) && !empty($email) && !empty($message))
        {
            if (strlen($name) < 2) // name validation(rus/en + numbers)
            {
                $result_msg['error'] = 'The name must contain at least 2 characters!';
            }
            elseif (!filter_var("$email", FILTER_VALIDATE_EMAIL)) // email validation
            {
                $result_msg['error'] = 'Invalid email format!';
            }
            elseif (strlen($message) < 2)
            {
                $result_msg['error'] = 'The message must contain at least 2 characters!';
            } else {
                return true;
            }
        } else {
            $result_msg['error'] = 'Fill all the fields!';
        }
        return false;
    }

}