<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/all', 'Home::pencarian');
$routes->get('/images', 'Home::foto');

$routes->match(['get', 'post'], '/contact', 'Contact::index');

// profilia
$routes->get('/profilia', 'Profilia::index');