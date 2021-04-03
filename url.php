<?php

require_once 'app/config/config.php';

$params = isset($_GET['page']) ? $_GET['page'] : 'Home';

if (substr_count($params, '/') > 0)
{
	$params = explode('/', $params);

	$controller = file_exists("app/controller/$params[0].php") ? $params[0] : 'Errors';
	$method = $params[1];
	$model = $params[0];
	$id = (isset($params[2]) ? $params[2] : 0);
}
else
{
	$controller = file_exists("app/controller/$params.php") ? $params : 'Errors';
	$method = 'index';
	$model = $controller;
	$id = 0;
}

if (file_exists(__DIR__ . "/app/controller/$controller.php"))
{
	require_once __DIR__ . "/app/controller/$controller.php";
}
else
{
	echo 'File not found: ' . __DIR__ . "/app/$controller.php";
	exit;
}

if (!method_exists($controller, $method))
{
	$controller = 'Errors';
	$method = 'index';
	require_once __DIR__ . "/app/controller/$controller.php";
}

$myController = new $controller([
	'controller' => $controller,
	'method' => $method,
	'model' => $model,
	'id' => $id,
	'get' => $_GET,
	'post' => $_POST
]);
