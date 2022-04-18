<?php
session_start();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

/*
    * Controllers
    */
$router->namespace("Source\Controllers");

/*
    * ADMIN 
    */
$router->group(null);
$router->get('/', "App:Home");

/*
    * Erros
    */
$router->group('Erro');
$router->get('/{errcode}', "App:Erro");

$router->dispatch();

if ($router->error()) {
    $router->redirect("/Erro/{$router->error()}");
}
