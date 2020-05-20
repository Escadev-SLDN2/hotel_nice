<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$requestUri = str_replace('/hotel_nice/', '', $_SERVER['REQUEST_URI']);

$requestParams = explode('/', $requestUri);

$controller = ucfirst($requestParams[0]) . 'Controller';
$action = $requestParams[1] . 'Action';

if (empty($controller)) {
    require('view/homepage.php');
} else {  
    if (file_exists('controllers/'. $controller . '.php')) {
        require('controllers/' . $controller . '.php');
        if (function_exists($action)) {
            $action();
        } else {
            require('404.php');
        }
    } else {
        require('404.php');
    }
}
