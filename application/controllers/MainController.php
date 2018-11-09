<?php

namespace application\controllers;
use application\core\Controller;

class MainController extends Controller{

	public function indexAction(){
		// echo '<b>Главная страница</b><br>';
		$this->view->render('Главная страница');
	}
}