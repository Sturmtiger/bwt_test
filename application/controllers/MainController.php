<?php

namespace application\controllers;

use application\core\Controller;
//use application\lib\Db; // временно(Model) SQL test

class MainController extends Controller
{

	public function indexAction()
    {
		// echo '<b>Главная страница</b><br>';

//        $this->view->redirect('/account/login');
		$this->view->render('Home page');

	}
}