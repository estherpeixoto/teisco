<?php

session_start();

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __FILE__);

require_once 'system/Autoload.php';
$AutoLoad = new AutoLoad();

spl_autoload_register([$AutoLoad, 'lib']);

require_once 'url.php';

$myController->$metodo();
