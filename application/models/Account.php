<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 25.11.2018
 * Time: 23:28
 */

namespace application\models;

use application\core\Model;

class Account extends Model
{
    public function __construct()
    {
        parent::__construct();
        echo 'The Account Model is working';
    }

    function signIn()
    {

    }

    function signUp($name, $surname, $email, $gender, $bday, $password)
    {
        $reg_data = [
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'gender' => $gender,
            'bday' => $bday,
            'password' => $password
        ];

        $sql = 'INSERT INTO users(name, surname, email, gender, bday, password) VALUES(:name, :surname, :email, :gender, :bday, :password)';
        $stmt = self::$db->prepare($sql);
        $stmt->execute($reg_data);
    }

}