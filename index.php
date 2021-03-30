<?php

session_start();

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __FILE__);

require_once 'system/Autoload.php';
$autoload = new Autoload();

spl_autoload_register([$autoload, 'lib']);

require_once 'url.php';

$myController->$method();
