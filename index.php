<?php
// Routeur

use App\Controllers\HomeController;

require_once("vendor/autoload.php");

if (!empty($_GET['p'])) {
    $params = explode("/", $_GET['p']);
    $className = ucfirst($params[0]) . "Controller";

    $class = '\App\Controllers\\' . $className;
    // print_r($params);
    $controller = new $class();
    // $userC = new \App\Controllers\UserController();
    if (isset($params[1])) {
        $methode = $params[1];
        $controller->$methode();
    } else {
        $controller->index();
    }

    // echo $class;
} else {
    $home = new HomeController();
    $home->index();
}