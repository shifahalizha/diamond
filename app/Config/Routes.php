<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->resource('game');
$routes->get('/ValoShop', 'ValoShop::index');
$routes->get('/MobaShop', 'MobaShop::index');
$routes->get('/COCShop', 'COCShop::index');
$routes->get('/PulsaShop', 'PulsaShop::index');

$routes->resource('register');
$routes->resource('login');
$routes->resource('bayarvalo');
$routes->resource('admin');
$routes->resource('pesananvalo');