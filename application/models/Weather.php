<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 25.11.2018
 * Time: 23:34
 */

namespace application\models;

use application\core\Model;

class Weather extends Model
{
    public function __construct()
    {
        echo 'The Weather Model is working';
    }
}