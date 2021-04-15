<?php

//echo "../vendor/composer/autoload.php";
require_once('../vendor/autoload.php');

use App\Routes\Route;
use App\Controllers\AdvertsController;
$pattern = '';
echo '<pre>';

$method = $_SERVER["REQUEST_METHOD"];
$url =  $_SERVER["REQUEST_URI"];

$router = new Route();
$router->callController($method, $url);

//$advert = new AdvertsController();
//$advert->eventShow();

//$clearUrl = $router->clearUrl($url);
//$clearUrl = $router->clearUrl($url);
//echo '<br/>';
//echo $clearUrl;


//print_r ($_SERVER);
//print_r ($_SERVER["REQUEST_URI"]);

//[REQUEST_URI]

//echo $_SERVER["REQUEST_URI"];
//preg_match('/^\/([0-9a-zA-Z]+)\./',$_SERVER["REQUEST_URI"],$matches);
//preg_match('/^\/([0-9a-zA-Z.]+)\?/',$_SERVER["REQUEST_URI"], $matches);
//print_r($matches);
//echo '<br/>';
//echo $_SERVER["REQUEST_URI"];

//$classAdvertController = new AdvertsController();
//$classSearchController = new SearchController();

//$classAdvertController->eventShow($request);

