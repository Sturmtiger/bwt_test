<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 21.11.2018
 * Time: 16:51
 */

namespace application\controllers;


use application\core\Controller;

class FeedbackController extends Controller
{
    public function sendAction()
    {
        $this->view->render('Send feedback');
    }

    public function listAction()
    {
        $this->view->render('Feedback list');
    }
}