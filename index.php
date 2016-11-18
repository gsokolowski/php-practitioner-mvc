<?php

// php -S localhost:8887

use App\Core\Router;
use App\Core\Request;

// load autoload to autoload all you classes in this project
require 'vendor/autoload.php';

// setup connection with db and prepare pdo to make queries
require 'core/bootstrap.php';

// we load routes file
$router = Router::load('app/routes.php');

// and we direct request
$router->direct(Request::uri(), Request::method());