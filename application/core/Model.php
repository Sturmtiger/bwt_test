<?php

namespace application\core;

use application\lib\Db;

abstract class Model {

	protected static $db;
	
	public function __construct() {
	    self::$db = Db::getInstanceDB()->getConnectionDB();

//		$this->db = new Db;
	}
}