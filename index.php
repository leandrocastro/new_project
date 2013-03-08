<?php

	$route = (isset($_GET['route']) ? $_GET['route'] : 'index/index');

	$route = explode("/", $route);

	$controller = $route[0];

	$method = $route[1];

	require_once('system/Controller.php');
	require_once('application/controllers/'.$controller.'.php');

	$newObject = new $controller();

	$newObject->novo();

	// echo($teste);