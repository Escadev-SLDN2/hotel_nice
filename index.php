<?php
$requestUri = str_replace('/hotel_nice/', '', $_SERVER['REQUEST_URI']);

$requestParams = explode('/', $requestUri);

$controller = $requestParams[0];
$action = $requestParams[1] . 'Action';

if (empty($requestParams[0])) {
    require('view/homepage.php');
} else {
    if (file_exists($controller . '.php')) {
        require($controller . '.php');
        if (function_exists($action)) {
            $action();
        } else {
            require('404.php');
        }
    } else {
        require('404.php');
    }
}
