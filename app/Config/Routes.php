<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::default');
$routes->get('/login', 'AuthController::default');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/genpass', 'AuthController::genpass');

$routes->get('/admin', 'DashboardController::adminDashboard', ['filter' => 'role:admin']);
$routes->get('/user', 'DashboardController::userDashboard', ['filter' => 'role:user']);

