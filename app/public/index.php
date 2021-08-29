<?php

require __DIR__ . "/../../bootstrap.php";

use app\classes\Route;
use app\classes\Uri;

$routes = [
    '/' => 'controllers/index.php'
];

$uri = Uri::load();

require Route::load($uri, $routes);
