<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->setDefaultController('Home');

// auth
$routes->get('auth', 'Auth::login');
$routes->get('login', 'Auth::login');
$routes->get('register', 'Auth::register');
$routes->get('login/auth', 'Login::auth');
$routes->get('logout', 'Login::logout');

// dashboard
$routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);


// set auto Route
$routes->setAutoRoute(true);
