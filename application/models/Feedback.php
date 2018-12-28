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
//        echo 'The Feedback Model is working';
    }

    function sendFeedback($name, $email, $message)
    {
        $feedback_input = [
            'name' => $name,
            'email' => $email,
            'message' => $message
        ];

        $sql = 'INSERT INTO feedbacks (name, email, message) VALUES(:name, :email, :message)';
        $stmt = self::$db->prepare($sql);
        $stmt->execute($feedback_input);
    }

    function getFeeds()
    {
        $sql = 'SELECT * FROM feedbacks';
        $stmt = self::$db->query($sql);
        $db_ans = $stmt->fetchAll();
        return $db_ans;
    }
}