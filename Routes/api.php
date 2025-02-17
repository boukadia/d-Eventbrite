<?php

use App\Controllers\CheckoutController;
use App\Controllers\StatistiqueController;
use App\Core\Routes;
use App\Controllers\EventController;
use App\Controllers\AuthController;
use App\Controllers\AjaxController;
use App\Controllers\VilleController;
use App\Controllers\CategoryController;
use App\Controllers\UserController;
use App\Controllers\StaticsController;
use App\Controllers\EventAdminController;
use App\Controllers\NotificationsController;


$router = new Routes();
 
 
  
$router->get('/', [EventController::class, 'index']);
 

$router->get('/login', [AuthController::class, 'showLoginPage']);
$router->post('/login', [AuthController::class, 'login']);

$router->get('/signup', [AuthController::class, 'showSignupPage']);
$router->post('/signup', [AuthController::class, 'signup']);

$router->get('/logout', [AuthController::class, 'logout']);
 
$router->get('/organisateur', [AuthController::class, 'dashboard']);
$router->get('/admin', [AuthController::class, 'dashboard']);
$router->get('/participant', [AuthController::class, 'dashboard']);



// organisateur routes
$router->get('/events', [EventController::class, 'getAll']);
$router->post('/addEvent', [EventController::class, 'create']);
$router->get('/deleteEvent', [EventController::class, 'remove']);
$router->get('/editeEvent', [EventController::class, 'edite']);
$router->post('/updateEvent', [EventController::class, 'updateEvent']);
$router->get('/eventBooking', [EventController::class, 'eventBooking']);
// $router->get('/eventBooking/{id}', [EventController::class, 'eventBooking']);

$router->get('/payment', [CheckoutController::class, 'createCheckout']);
$router->get('/successPayment', [CheckoutController::class, 'successPayment']);

$router->get('/villes', [VilleController::class, 'getAll']);
$router->get('/categories', [CategoryController::class, 'getAll']);

$router->get('/usersUnscriptions', [StatistiqueController::class, 'getAll']);

// admin routes
$router->get('/admin/users', [UserController::class, 'getAllUsers']); 
$router->post('/admin/users/ban', [UserController::class, 'banUser']);  
$router->post('/admin/users/update-role', [UserController::class, 'updateUserRole']);  


 $router->post('/addCategory', [CategoryController::class, 'addCategory']);
$router->post('/deleteCategory', [CategoryController::class, 'deleteCategory']);
$router->get('/getAllCategories', [CategoryController::class, 'getAllCategories']);

$router->get('/getEventStats', [StaticsController::class, 'getEventStats']);

$router->get('/admin/events', [EventAdminController::class, 'getAllEvents']); 
$router->post('/admin/events/validate', [EventAdminController::class, 'validateEvent']); 
$router->post('/admin/events/delete', [EventAdminController::class, 'deleteEvent']); 
$router->post('/admin/events/refused', [EventAdminController::class, 'refuseEvent']);
$router->post('/admin/events/update', [EventAdminController::class, 'updateEvent']);

// notifications routes

$router->get('/admin/getNotifications', [NotificationsController::class, 'getNotifications']);
$router->post('/admin/markAllreadNotifications', [NotificationsController::class, 'markAsRead']);

$router->get('/ajax/load_page', [AjaxController::class, 'loadPage']);

return $router;

 
 