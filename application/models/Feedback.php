<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 25.11.2018
 * Time: 23:35
 */

namespace application\models;

use application\core\Model;

class Feedback extends Model
{
    public function __construct()
    {
        parent::__construct();
        echo 'The Feedback Model is working';
    }
}