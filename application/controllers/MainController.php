<?php

namespace application\controllers;

use application\core\Controller;
use  application\lib\Db; // временно(Model)

class MainController extends Controller{

	public function indexAction(){

		$db = new Db;

		$form = '2; DELETE FROM users' // sql-инъекция

		$params = [
			'id' => 2,
		];

		$data = $db->column('SELECT name FROM users WHERE id = :id', $params);
		debug($data);
		// echo '<b>Главная страница</b><br>';
		
		$this->view->render('Главная страница');
	}
}