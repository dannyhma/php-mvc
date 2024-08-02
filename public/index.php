<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Himaone\PhpMvc\App\Router;
use Himaone\PhpMvc\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/about', HomeController::class, 'about');

Router::run();