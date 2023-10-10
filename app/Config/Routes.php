<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Latihan1::index');
$routes->get('/penjumlahan/(:num)/(:num)', 'Latihan1::getPenjumlahan/$1/$2');
$routes->get('/', 'Matakuliah::index');
$routes->post('/', 'Matakuliah::cetak');
$routes->get('web','Web::index',['as' => 'home']);
$routes->get('web/about','Web::about', ['as' => 'about']);
