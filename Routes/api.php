<?php

use App\Controllers\StatistiqueController;
use App\Core\Routes;
use App\Controllers\EventController;
use App\Controllers\AuthController;
use App\Controllers\AjaxController;
use App\Controllers\VilleController;
use App\Controllers\CategoryController;

$router = new Routes();

$router->get('/', [EventController::class, 'index']);
// $router->get('/login', [EventController::class, 'login']);

$router->get('/login', [AuthController::class, 'showLoginPage']);
$router->post('/login', [AuthController::class, 'login']);

$router->get('/signup', [AuthController::class, 'showSignupPage']);
$router->post('/signup', [AuthController::class, 'signup']);

$router->get('/logout', [AuthController::class, 'logout']);


$router->get('/admin/adminDashboard', [AuthController::class, 'dashboard']);
$router->get('/participant', [AuthController::class, 'dashboard']);

$router->get('/logout', [AuthController::class, 'logout']);

// roles
$router->get('/organisateur', [AuthController::class, 'dashboard']);
$router->get('/admin', [AuthController::class, 'dashboard']);
 $router->get('/participant', [AuthController::class, 'dashboard']);

 
$router->get('/ajax/load_page', [AjaxController::class, 'loadPage']);

$router->get('/events', [EventController::class, 'getAll']);
$router->post('/addEvent', [EventController::class, 'create']);
$router->get('/deleteEvent', [EventController::class, 'remove']);
$router->get('/editeEvent', [EventController::class, 'edite']);
$router->post('/updateEvent', [EventController::class, 'updateEvent']);

$router->get('/villes', [VilleController::class, 'getAll']);
$router->get('/categories', [CategoryController::class, 'getAll']);

$router->get('/usersUnscriptions', [StatistiqueController::class, 'getAll']);

 return $router;

 