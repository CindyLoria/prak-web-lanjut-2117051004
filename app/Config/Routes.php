<?php

use App\Controllers\UserController; 
use App\Controllers\KelasController; 
use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profile', [Home::class, 'profile']);
$routes->get('user/profile/(:any)/(:any)/(:any)', [UserController::class, 'profile']);
#form
$routes->get('/user/create', 'UserController::create');
$routes->post('/user/store', 'UserController::store');
$routes->get('/user', 'UserController::index');

$routes->get('/user/(:any)/edit', [UserController::class, 'edit']);
$routes->put('/user/(:any)', [UserController::class, 'update']);
$routes->delete('/user/(:any)', [UserController::class, 'destroy']);

$routes->get('user/(:any)', [UserController::class, 'show']);

$routes->get('/kelas/create', [KelasController::class,'create']);
$routes->post('/kelas/store', [KelasController::class,'store']);
$routes->match(['get', 'post'],'/kelas/store', [KelasController::class, 'store']);
$routes->get('/kelas', [KelasController::class,'index']);
$routes->get('/kelas/(:any)/edit', [KelasController::class, 'edit']);
$routes->put('/kelas/(:any)', [KelasController::class, 'update']);
$routes->delete('/kelas/(:any)', [KelasController::class, 'destroy']);
