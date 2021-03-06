<?php

namespace application\core;

use application\core\View;
	class Router
    {

		private $routes = [];
		private $params = [];
		
		public function __construct()
        {
			$arr = require 'application/config/routes.php';
			foreach ($arr as $key => $value)
			{
				$this->add($key, $value);
			}
			// debug($this->routes);
		}

		private function add($route, $params)
        {
			$route = '#^'.$route.'$#'; // re (or "~$route~", "/$route/",  "#$route#")
			$this->routes[$route] = $params;
		}

		private function match()
        {
			$url = trim($_SERVER['REQUEST_URI'], '/');
			foreach ($this->routes as $route => $params)
			{
				if (preg_match($route, $url, $matches))
				{
					$this->params = $params;
					return true;
				}
			}
			return false;
		}

		public function run()
        {
			if ($this->match())
			{
				$path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
				if (class_exists($path))
				{
					// echo 'Controller <b>'.$path.'</b> exists'.'<br>';

					$action = $this->params['action'].'Action';
					if (method_exists($path, $action))
					{
						// echo 'Action found: <b>'.$action.'</b><br>';

						$controller = new $path($this->params);
						$controller->$action();
					} else {
						// echo 'Action NOT found: '.$action.'<br>';
						View::errorCode(404);
					}
				} else {
					// echo 'Controller <b>'.$path.'</b> NOT found'.'<br>';
					View::errorCode(404);
				}

			} else {
				// echo 'Route NOT found'.'<br>';
				View::errorCode(404);
			}
		}

	}