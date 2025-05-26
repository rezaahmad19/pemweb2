<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'books::index');

// Daftar dan Detail
$routes->get('/books', 'Books::index');
$routes->get('/books/(:segment)', 'Books::detail/$1');

// Tambah Buku
$routes->get('/books/create', 'Books::create');
$routes->post('/books/save', 'Books::save');

// Edit Buku
$routes->get('/books/edit/(:segment)', 'Books::edit/$1');
$routes->post('/books/update/(:num)', 'Books::update/$1');

// Hapus Buku
$routes->delete('/books/(:num)', 'Books::delete/$1');
