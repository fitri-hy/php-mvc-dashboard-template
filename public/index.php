<?php
// Define a base path for your application
define('BASE_PATH', __DIR__ . '/../app/views');

// Include necessary files
require_once '../app/core/Router.php';
require_once '../app/core/Database.php';
require_once '../app/core/Model.php';
require_once '../app/core/Controller.php';
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/DashboardController.php';

$router = new Router();
$router->addRoute('', 'DashboardController@showDashboard');
$router->addRoute('login', 'AuthController@showLogin');
$router->addRoute('register', 'AuthController@showRegister');
$router->addRoute('login_post', 'AuthController@login');
$router->addRoute('register_post', 'AuthController@register');
$router->addRoute('logout', 'AuthController@logout'); // Add logout route

$router->dispatch();
