<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/baterias', 'Home::baterias');

$routes->get('/compras', 'Home::compras');
$routes->post('/envia', 'Home::sendMail');