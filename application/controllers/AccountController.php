<?php

namespace application\controllers;
use application\core\Controller;

class AccountController extends Controller{

	public function loginAction(){
		echo '<b>Страница входа</b><br>';
		var_dump($this->route);
	}


	public function registerAction(){
		echo '<b>Страница регистрации</b>';
	}
}