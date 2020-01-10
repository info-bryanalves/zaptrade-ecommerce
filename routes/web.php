<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
 */

$router->get('/', [
    'as' => 'home',
    'uses' => 'CatalogController@index',
]);
$router->get('/catalog/{id}', 'CatalogController@show');

$router->post('/auth', 'AuthController@store');
$router->delete('/auth', 'AuthController@destroy');

$router->get('/administrative', 'AdministrativeController@index');

$router->get('/employees', 'EmployeeController@index');
$router->delete('/employees/{id}', 'EmployeeController@destroy');

$router->get('/products', 'ProductController@index');
