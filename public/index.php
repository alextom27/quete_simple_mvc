<?php
use Controller\CategoryController;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/dispatcher.php';



    $route = $_GET['route'] ?? '';

 /*   if ($route === 'items') {
        $controller = new Controller\ItemController;
        $controller->index();
    } else {
        header("HTTP/1.0 404 Not Found");
        echo 'Page introuvable';
    }
 */