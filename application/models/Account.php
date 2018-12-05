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

    function signUp()
    {

    }

}