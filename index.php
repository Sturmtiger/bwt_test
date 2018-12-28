<?php


require 'application/lib/Dev.php';

use application\core\Router;

// require 'application/core/Router.php';
// require 'application/controllers/AccountController.php';

session_start();

//include_once('application/views/layouts/header.php'); // header test

require 'vendor/autoload.php';

spl_autoload_register(function($class) {
	$path = str_replace("\\", '/', $class.'.php');
	if (file_exists($path)) {
		require $path;
	}
});


$router = new Router;
$router->run();
