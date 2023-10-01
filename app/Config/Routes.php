<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Latihan1::index');
$routes->get('/penjumlahan/(:num)/(:num)', 'Latihan1::getPenjumlahan/$1/$2');
$routes->get('/', 'Matakuliah::index');
$routes->post('/', 'Matakuliah::cetak');
