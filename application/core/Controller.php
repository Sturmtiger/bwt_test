<?php

namespace application\core;

use application\core\View;
use application\lib\Validator;

abstract class Controller
{

	public $route;
	public $view;
	public $model;
	public $validator; //

	public function __construct($route)
    {
		$this->route = $route;
		$this->view = new View($route);
		$this->model = $this->loadModel($route['controller']);
		$this->validator = new Validator();
	}

	public function loadModel($name)
    {
		$path = 'application\models\\'.ucfirst($name);
		if (class_exists($path))
		{
			return new $path;
		}
		// else {
		// 	echo 'Model <b>'.$path.'</b> NOT found';
		// }		
	} 
}