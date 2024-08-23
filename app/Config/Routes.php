<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::login');
$routes->get('/home', 'HomeController::main');
$routes->get('/flowers', 'HomeController::index');
$routes->get('/ucapan', 'HomeController::ucapan');
$routes->get('/message', 'HomeController::message');
$routes->get('/foto', 'HomeController::foto');
