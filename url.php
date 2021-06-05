<?php

require_once 'app/config/config.php';

$parametros = isset($_GET['pag']) ? $_GET['pag'] : 'Home';
$outrosParametros = [];

if (substr_count($parametros, '/') > 0)
{
	$parametros = explode('/', $parametros);
	$controller = file_exists("app/controller/{$parametros[0]}.php") ? $parametros[0] : 'Erros';
	$metodo = $parametros[1];
	$model = $parametros[0];
	$id = isset($parametros[2]) ? $parametros[2] : 0;
	$acao = isset($parametros[3]) ? $parametros[3] : '';

	for ($lll = 4; $lll < count($parametros); $lll++)
	{
		$outrosParametros[count($outrosParametros)] = $parametros[$lll];
	}
}
else
{
	$controller = file_exists("app/controller/$parametros.php") ? $parametros : 'Erros';
	$metodo = 'index';
	$model = $controller;
	$id = 0;
	$acao = '';
}

if (file_exists(__DIR__ . "/app/controller/{$controller}.php"))
{
	require_once __DIR__ . "/app/controller/{$controller}.php";
}
else
{
	echo 'Não achei o arquivo ' . __DIR__ . "/app/$controller.php";
	exit;
}

if (!method_exists($controller, $metodo))
{
	$controller = 'Erros';
	$metodo = 'index';
	require_once __DIR__ . "/app/controller/{$controller}.php";
}

$myController = new $controller([
	'controller' => $controller,
	'metodo' => $metodo,
	'id' => $id,
	'model' => $model,
	'acao' => $acao,
	'parametros' => $outrosParametros,
	'get' => $_GET,
	'post' => $_POST
]);
