<?php 

namespace application\lib;

use PDO;

class Db //Singleton
{
    private $db_connection;
    private static $db_instance;

    private function __construct()
    {
        $config = require 'application/config/db.php';
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};";
        $this->db_connection = new PDO($dsn, $config['user'], $config['dbpassword'], $opt);

    }

    public static function getInstanceDB()
    {
        if (!isset(self::$db_instance))
        {
            self::$db_instance = new self();
        }
        return self::$db_instance;
    }

    public function getConnectionDB()
    {
        return $this->db_connection;
    }
}