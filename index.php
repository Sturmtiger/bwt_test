<?php


require 'application/lib/Dev.php';


use application\core\Router;
// require 'application/core/Router.php';

// require 'application/controllers/AccountController.php';

include_once('application/template/header.php'); // header

spl_autoload_register(function($class) {
	$path = str_replace("\\", '/', $class.'.php');
	if (file_exists($path)) {
		require $path;
	}
});

// session_start();

$router = new Router;
$router->run();
