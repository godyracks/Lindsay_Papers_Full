<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [\App\Controllers\Home::class, 'index']); 
$routes->get('/fees', [\App\Controllers\Fees::class, 'index']); 
$routes->get('/services', [\App\Controllers\Services::class, 'index']); 
$routes->get('/emailform', [\App\Controllers\EmailForm::class, 'index']); 
$routes->get('/google-callback', 'GoogleAuthController::callback');
$routes->get('/stories', 'Testimonials::index');
$routes->get('auth', 'Login::index');
$routes->get('/google-login', 'GoogleAuthController::login');

