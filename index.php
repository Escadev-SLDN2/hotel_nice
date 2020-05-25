<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('SITE_DIR','/hotel_nice/');

$requestUri = str_replace(SITE_DIR, '', $_SERVER['REQUEST_URI']);

$requestParams = explode('/', $requestUri);

$controller = (!empty($requestParams[0]) ? ucfirst($requestParams[0])  : 'Accueil'). 'Controller';
$action = (!empty($requestParams[1]) ? $requestParams[1] : 'index'). 'Action';

if (file_exists('controllers/'. $controller . '.php')) {
    require('controllers/' . $controller . '.php');
    if (function_exists($action)) {
        require('views/templates/header.php');
        $action();
    } else {
        $pageTitle = 'Erreur 404';
        require('views/templates/header.php');
        require('404.php');
    }
} else {
    $pageTitle = 'Erreur 404';
    require('views/templates/header.php');
    require('404.php');
}

