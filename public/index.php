<?php

use router\Router;
use src\Controller\ExempleController;

require '../vendor/autoload.php';

$router = new Router($_GET['url']);

$router->map("", function($view){
    $view->render("base.php");
});

$exempleController = new ExempleController($router);
$exempleController->execute();

$router->run();