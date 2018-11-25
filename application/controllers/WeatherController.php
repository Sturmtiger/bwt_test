<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 21.11.2018
 * Time: 17:18
 */

namespace application\controllers;


use application\core\Controller;

class WeatherController extends Controller
{
    public function getweatherAction()
    {
        $this->view->render('Weather in ZP');
    }

}