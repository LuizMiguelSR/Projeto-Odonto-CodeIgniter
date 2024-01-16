<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/recuperar', 'Home::recuperar');

$routes->get('/painel', 'Painelcontroller::index');
