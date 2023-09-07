<?php

use App\Controller\PageController;
use App\Controller\ServiceController;

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->get('/', 'App\Controller\PageController@index');

$router->get('/about', 'App\Controller\PageController@about');

$router->get('/contact', 'App\Controller\PageController@contact');

// services routes
$prefix = '/service';

$router->get('/service/onsite-security', 'ServiceController@OnSite');
$router->get('/service/satellite-tracking', 'ServiceController@SatelliteTracking');
$router->get('/service/cash-in-transit', 'ServiceController@CIT');
$router->get('/service/event-security', 'ServiceController@EventSecurity');

// 400 page
$router->set404('/api(/.*)?', function() {
    header('HTTP/1.1 404 Not Found');
    header('Content-Type: application/json');

    $jsonArray = array();
    $jsonArray['status'] = "404";
    $jsonArray['status_text'] = "route not defined";

    echo json_encode($jsonArray);
});