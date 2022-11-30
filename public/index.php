<?php

use Staditek\App\Controller\HomeController;
use Staditek\App\Core\Router;
use Staditek\App\Controller\TampilanController;
use Staditek\App\Core\View;

require_once __DIR__ . '/../vendor/autoload.php';
Router::addRoute('GET', '/', HomeController::class, 'index', []);
Router::addRoute('GET', '/view', HomeController::class, 'view', []);
Router::run();


//Router::addRoute('GET', '/', HomeController::class, 'index', []);