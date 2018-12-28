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
        if (isset($_SESSION['email']) && isset($_SESSION['name']) && isset($_SESSION['surname']))
        {
            $weather_data = $this->model->getWeather();
            $this->view->render('Weather in ZP-City', $result_msg=null, $data=$weather_data);
        } else {
            $this->view->render('Weather in ZP-City');
        }
    }
}