<?php

use App\Controller\PageController;

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->get('/', 'App\Controller\PageController@index');

 $router->get('/about', function() { 
    echo "about";
 });
