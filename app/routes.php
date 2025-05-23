<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

$router->get('', 'LandingController@index');

$router->get('login', 'LoginController@index');
$router->get('dashboard', 'DashboardController@index');
$router->get('ListaDeUsuarios', 'ListaDeUsuariosController@index');
$router->post('ListaDeUsuarios/create', 'ListaDeUsuariosController@store');
$router->post('ListaDeUsuarios/edit', 'ListaDeUsuariosController@edit');
$router->post('ListaDeUsuarios/delete', 'ListaDeUsuariosController@delete');
