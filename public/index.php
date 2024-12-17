<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\Router;

$router = new Router();

$router->add('/', [new \App\Controllers\HomeController(), 'index']);
// $router->add('/admin', [new \App\Controllers\AdminController(), 'dashboard']);
$router->add('/contact', [new \App\Controllers\ContactController(), 'showForm']);

$router->handle($_SERVER['REQUEST_URI']);
