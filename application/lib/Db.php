<?php 

namespace application\lib;

use PDO;

class Db {

	protected $db;

	public function __construct()
	{
		$config = require 'application/config/db.php';
		$this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['user'], $config['dbpassword']);
	}

	public function query($sql, $params = []) {
		$stmt = $this->db->prepare($sql);
		// $query = $this->db->query($sql);
		if(!empty($params)) {
			foreach ($params as $key => $value) {
				$stmt->bindValue(':'.$key, $value);
			}
		}
		$stmt->execute();
		return $stmt;
		// return $query;
	}

	public function rows($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	public function column($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchColumn();
	}
}