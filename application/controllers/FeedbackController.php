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

    private $result_msg; // for query result(error/access)

    public function sendAction()
    {
        if (isset($_POST['send-feed']))
        {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $message = trim($_POST['message']);

            if ($this->validator->validFeedback($name, $email, $message,$this->result_msg))
            {
                $this->model->sendFeedback($name, $email, $message);
                $this->result_msg['success'] = 'Your feedback has been successfully sent!';
            }
        }
        $this->view->render('Send feedback', $this->result_msg);
    }

    public function listAction()
    {
        if (isset($_SESSION['email']) && isset($_SESSION['name']) && isset($_SESSION['surname']))
        {
            $feed_data = $this->model->getFeeds();
            $this->view->render('Feedback list', $result_msg=null, $data=$feed_data);
        }
        else
        {
            $this->view->render('Feedback list');
        }
    }
}