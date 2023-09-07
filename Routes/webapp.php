<?php
use App\Controller\PageController;
use App\Controller\ServiceController;

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->get('/', 'App\Controller\PageController@index');

$router->get('/about', 'App\Controller\PageController@about');

$router->get('/contact', 'App\Controller\PageController@contact');
$router->post('/contact', 'App\Controller\PageController@store');
$router->get('/thank-you', 'App\Controller\PageController@thank_you');

// services routes
$prefix = '/service';

$router->get('/service/onsite-security', 'App\Controller\ServiceController@onsite');
$router->get('/service/satellite-tracking', 'App\Controller\ServiceController@SatelliteTracking');
$router->get('/service/cash-in-transit', 'App\Controller\ServiceController@CIT');
$router->get('/service/event-security', 'App\Controller\ServiceController@EventSecurity');

// 400 page
$router->set404('/api(/.*)?', function() {
    header('HTTP/1.1 404 Not Found');
    header('Content-Type: application/json');

    $jsonArray = array();
    $jsonArray['status'] = "404";
    $jsonArray['status_text'] = "route not defined";

    echo json_encode($jsonArray);
});