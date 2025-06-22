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

$router->get('lista', 'ListaDePostsController@index');
$router->get('tabeladeposts', 'TabelaDePostsAdminController@index'); //antes era 'admin/tabelaDePosts' para todos os 3
$router->post('tabeladeposts/create', 'TabelaDePostsAdminController@store');
$router->get('postIndividual/{id}', 'PostIndividualController@index');


$router->post('admin/tabeladeposts/delete', 'TabelaDePostsAdminController@delete');
$router->post('admin/tabeladeposts/edit', 'TabelaDePostsAdminController@edit');

$router->post('login', 'LoginController@login');
$router->post('logout', 'DashboardController@logout');

$router->get('admin/tabeladeposts/search', 'TabelaDePostsAdminController@search');
$router->get('admin/tabeladeposts/clean', 'TabelaDePostsAdminController@clean');

$router->get('ListaDeUsuarios/search', 'ListaDeUsuariosController@search');
$router->get('ListaDeUsuarios/clean', 'ListaDeUsuariosController@clean');

$router->get('lista/search', 'ListaDePostsController@search');
$router->get('lista/clean', 'ListaDePostsController@clean');



$router->get('ListaDeUsuarios', 'ListaDeUsuariosController@paginate');

$router->post('postIndividual/{id}/create', 'PostIndividualController@store');
$router->post('postIndividual/{id}/delete', 'PostIndividualController@delete');

