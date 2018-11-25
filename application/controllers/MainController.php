<?php

namespace application\controllers;

use application\core\Controller;
//use application\lib\Db; // временно(Model) SQL test

class MainController extends Controller
{

	public function indexAction()
    {
		// SQL test
		// $db = new Db;
		// $form = '2; DELETE FROM users WHERE id = 4'; // sql-инъекция
		// $params = [
		// 	'id' => 2,
		// ];
		// $data = $db->column('SELECT name FROM users WHERE id = :id', $params);
		// debug($data);


		// echo '<b>Главная страница</b><br>';
		
		$this->view->render('Home page');


//		var_dump(Db::DB_Connect());
	}
}