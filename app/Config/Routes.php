<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('city', 'Home::featuredCity');

$routes->get('signin', 'Home::userSignin');

$routes->get('signup', 'Home::userSignup');

 

