<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

$router->get('', 'LandingController@index');

$router->get('login', 'LoginController@index');
$router->get('dashboard', 'DashboardController@index');
$router->get('lista', 'ListaDePostsController@index');
$router->get('tabeladeposts', 'TabelaDePostsAdminController@index'); //antes era 'admin/tabelaDePosts' para todos os 3
$router->post('tabeladeposts/create', 'TabelaDePostsAdminController@store');
$router->get('postIndividual/{id}', 'PostIndividualController@index');



$router->post('admin/tabeladeposts/delete', 'TabelaDePostsAdminController@delete');
$router->post('admin/tabeladeposts/edit', 'TabelaDePostsAdminController@edit');

$router->post('login', 'LoginController@login');
$router->post('logout', 'DashboardController@logout');

$router->get('admin/tabeladeposts/search', 'TabelaDePostsAdminController@search');

