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

    $router->get('/products/create', 'ProductController@create');
    $router->post('/products/store', 'ProductController@store');

    $router->get('/products/{id}/edit', 'ProductController@edit');
    $router->put('/products/{id}', 'ProductController@update');

    $router->get('/products/{id}/photos', 'ProductController@photos');
    $router->put('/products/{id}/photos', 'ProductController@thumbnail');
    $router->post('/products/{id}/photos', 'ProductController@updatePhotos');

    $router->delete('/products/{id}', 'ProductController@destroy');
});