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
$routes->get('login/auth', 'Login::auth');
$routes->get('register', 'Auth::register');
$routes->get('logout', 'Login::logout');

// dashboard
$routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('analytics', 'Dashboard::analytics');
$routes->get('reports', 'Dashboard::reports');

// event
$routes->get('events', 'Event::events');
$routes->get('create', 'Event::create');

// account
$routes->get('profile', 'Account::profile');
$routes->get('account-setting', 'Account::setting');


// set auto Route
$routes->setAutoRoute(true);
