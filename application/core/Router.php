<?php

namespace application\core;

	class Router {

		protected $routes = [];
		protected $params = [];
		
		public function __construct() {
			$arr = require 'application/config/routes.php';
			foreach ($arr as $key => $value) {
				$this->add($key, $value);
			}
			// debug($this->routes);
		}

		public function add($route, $params) {
			$route = '#^'.$route.'$#';
			$this->routes[$route] = $params;
		}

		public function match() {
			$url = trim($_SERVER['REQUEST_URI'], '/');
			foreach ($this->routes as $route => $params) {
				if (preg_match($route, $url, $matches)) {
					$this->params = $params;
					return true;
				}
			}
			return false;
		}

		public function run() {
			if ($this->match()) {
				$path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
				if (class_exists($path)) {
					echo 'Controller <b>'.$path.'</b> exists'.'<br>';

					$action = $this->params['action'].'Action';
					if (method_exists($path, $action)) {
						echo 'Экшен найден: <b>'.$action.'</b><br>';

						$controller = new $path($this->params);
						$controller->$action();
					}

					else {
						echo 'Экшен НЕ найден: '.$action.'<br>';
					}
				}
				else {
					echo 'Controller <b>'.$path.'</b> NOT found'.'<br>';
				}

			}
			else {
				echo 'Маршрут НЕ найден'.'<br>';
			}
		}

	}