<?php

require __DIR__ . "/../../bootstrap.php";

use app\classes\Route;
use app\classes\Uri;
use app\classes\Layout;

$layout = new Layout;

$routes = [
    '/' => 'controllers/index',
    '/create_user' => 'controllers/create_user',
    '/store_user' => 'controllers/store_user'
];

$uri = Uri::load();

require Route::load($uri, $routes);

require $layout->master('layout');