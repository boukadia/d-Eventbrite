<?php
use App\Core\Routes;
use App\Controllers\EventController;
use App\Controllers\AjaxController;
<<<<<<< HEAD
use App\Controllers\AuthController;
use App\Controllers\UserController;
use App\Controllers\CategoryController;
use App\Controllers\StaticsController;
=======
use App\Controllers\VilleController;
use App\Controllers\CategoryController;
>>>>>>> feature-M-events-organisateur

use App\Models\AdminEventModel;
$router = new Routes();
$adminEventModel = new AdminEventModel();
$eventController = new EventController();
$userController = new UserController();
$CategoryController = new CategoryController();
$StaticsController = new StaticsController();

 
$router->get('/', [$eventController, 'index']); 
$router->get('/events', [$eventController, 'getAllEvents']); 

 
$router->get('/login', [AuthController::class, 'showLoginPage']); 
$router->post('/login', [AuthController::class, 'login']); 
$router->get('/signup', [AuthController::class, 'showSignupPage']); 
$router->post('/signup', [AuthController::class, 'signup']); 
$router->get('/logout', [AuthController::class, 'logout']); 


$router->get('/organisateur', [AuthController::class, 'dashboard']);
$router->get('/admin', [AuthController::class, 'dashboard']);
$router->get('/participant', [AuthController::class, 'dashboard']);

// admin routes
$router->get('/admin/users', [$userController::class, 'getAllUsers']); 
$router->post('/admin/users/ban', [$userController::class, 'banUser']);  
$router->post('/admin/users/update-role', [$userController::class, 'updateUserRole']);  

$router->get('/ajax/load_page', [AjaxController::class, 'loadPage']);

<<<<<<< HEAD
 $router->post('/addCategory', [$CategoryController, 'addCategory']);
$router->post('/deleteCategory', [$CategoryController, 'deleteCategory']);
$router->get('/getAllCategories', [$CategoryController, 'getAllCategories']);
=======
$router->get('/events', [EventController::class, 'getAll']);
$router->post('/addEvent', [EventController::class, 'create']);
$router->get('/deleteEvent', [EventController::class, 'remove']);
$router->get('/editeEvent', [EventController::class, 'edite']);
$router->post('/updateEvent', [EventController::class, 'updateEvent']);

$router->get('/villes', [VilleController::class, 'getAll']);
$router->get('/categories', [CategoryController::class, 'getAll']);
>>>>>>> feature-M-events-organisateur

$router->get('/getEventStats', [$StaticsController, 'getEventStats']);

$router->get('/admin/events', [$eventController, 'getAllEvents']); 
$router->post('/admin/events/validate', [$eventController, 'validateEvent']); 
$router->post('/admin/events/delete', [$eventController, 'deleteEvent']); 
$router->post('/admin/events/refused', [$eventController, 'refuseEvent']);
$router->post('/admin/events/update', [$eventController, 'updateEvent']);

return $router;
  
 