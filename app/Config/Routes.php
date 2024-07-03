<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/dashboard', 'Pages::dashboard');
$routes->get('/help', 'Pages::help');
$routes->get('/manage', 'Pages::manage');
