<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\Router;
use App\Core\Request;

$router = Router::load('app/routes.php');

$router->direct(Request::uri(), Request::method());
