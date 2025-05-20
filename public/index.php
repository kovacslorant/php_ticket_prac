<?php

define('ROOT', dirname(__DIR__));
require_once ROOT . '/app/core/Router.php';
require_once ROOT . '/app/core/Controller.php';

$router = new Router();
$router->route();


?>