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


    public function validRegister($name, $surname, $email, $password1, $password2, &$result_msg)
    {
        if (!empty($name) && !empty($surname) && !empty($email) && !empty($password1) && !empty($password2))
        {
            $valid_password = $this->validPassword($password1, $password2); // password validation

            if (!preg_match('/^[a-zA-Zа-яА-Я]*$/', $name)) // name validation
            {
                echo 'Invalid name format!';
            }
            elseif (!preg_match('/^[a-zA-Zа-яА-Я-]*$/', $surname)) // surname validation
            {
                echo 'Invalid surname format!';
            }
            elseif (!filter_var("$email", FILTER_VALIDATE_EMAIL)) // email validation
            {
                echo 'Invalid email format!';
            }
            elseif (null !== $valid_password)
            {
                echo $valid_password;
            } else {
                return true;
            }
        } else {
            echo 'Fill all the fields!';
        }
        return false;
    }


    private function validPassword($password1, $password2)
    {
        if (strlen($password1) < 10) return 'The length of the password must be not less than 10!';
        if ($password1 != $password2) return 'The passwords do not match!';
        if (!preg_match('/[0-9]+/', $password1)) return 'The password must contain at least 1 number!';
        if (!preg_match('/[a-zA-Z]{3,}/', $password1)) return 'The password must contain at least 3 words!';
        return null;
    }
}