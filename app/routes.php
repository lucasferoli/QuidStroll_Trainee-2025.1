<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

$router->get('', 'LandingController@index');

$router->get('login', 'LoginController@index');
$router->get('dashboard', 'DashboardController@index');