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


$router->group(['middleware' => 'auth'], function() use ($router) {

    $router->get('/administrative', 'AdministrativeController@index');

    $router->group(['middleware' => 'permission'], function() use ($router) {
        $router->get('/employees', 'EmployeeController@index');
        $router->get('/employees/create', 'EmployeeController@create');
        $router->post('/employees/store', 'EmployeeController@store');
        $router->delete('/employees/{id}', 'EmployeeController@destroy');
    });

    $router->get('/products', 'ProductController@index');
    $router->delete('/products/{id}', 'ProductController@destroy');
});