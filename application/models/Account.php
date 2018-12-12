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
//        echo 'The Account Model is working';


//        $email = 'maksim155555@gmail.com';
//        $sql = 'SELECT * FROM users WHERE id = 324';
//        $stmt = self::$db->prepare($sql);
//        $stmt->execute();
//        var_dump($stmt->fetch());

    }

    function signIn($email, $password)
    {
        $authorize_input = [
          'email' => $email
        ];

        $sql = 'SELECT name, surname, email, password FROM users WHERE email = :email';
        $stmt = self::$db->prepare($sql);
        $stmt->execute($authorize_input);
        $db_ans = $stmt->fetch();
        if (null !== $db_ans)
        {
            if (password_verify($password, $db_ans['password']))
            {
                return array_slice($db_ans, 0, 3);
            }
        }
    }

    function signUp($name, $surname, $email, $gender, $bday, $password)
    {
        $password = password_hash($password, PASSWORD_DEFAULT); // password hashing

        $reg_input = [
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'gender' => $gender,
            'bday' => $bday,
            'password' => $password
        ];

        $sql = 'INSERT INTO users(name, surname, email, gender, bday, password) VALUES(:name, :surname, :email, :gender, :bday, :password)';
        $stmt = self::$db->prepare($sql);
        $stmt->execute($reg_input);
    }

}