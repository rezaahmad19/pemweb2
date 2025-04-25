<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', to: 'Home::index');
$routes->get('/proffil', to: 'profil::index');
$routes->get('matakuliah/visdat', to: 'matakuliah::visdat');
$routes->get('matakuliah/pemweb2', to: 'matakuliah::pemweb2');
$routes->get('matakuliah/metodologi', to: 'matakuliah::metodologi');
$routes->get('matakuliah/basisdata', to: 'matakuliah::basisdata');
