<?php

namespace application\core;

class View {

	public $path;
	public $route;
	public $layout = 'header';

	public function __construct($route) {
		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
//		 echo $this->path;
	}

	public function render($title) {
		$path = 'application/views/'.$this->path.'.php';
		if (file_exists($path)) {
//            require_once $path;


			ob_start();
			require_once $path;
			$content = ob_get_clean();
			require_once 'application/views/layouts/'.$this->layout.'.php';
		}
		else {
			echo "View NOT found";
		}
	}


	public function redirect($url) {
		header('location: '.$url);
		exit;
	}

	public static function errorCode($code) {
		http_response_code($code);
		$path = 'application/views/errors/'.$code.'.php';
		if (file_exists($path)) {
			require $path;
			exit;			
		}
		else {
			echo "Error $code layout NOT found";			
		}

	}


}