<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//$routes->get('/ruta','Home::ejemplo');


//$routes->get('Peliculas', 'Pelicula::index');
//$routes->get('peliculas/new','pelicula::create');
//$routes->get('peliculas/edit/(:num)','pelicula::create/$1');
//             Ruta         Archivo:: Funcion

$routes->presenter('pelicula');
$routes->presenter('categoria');

