<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
$router->group(['prefix' => '/user/{id}'], function () use ($router) {
    $router->get('/children', 'ChildController@index');
    $router->post('/child/create', 'ChildController@store');
    $router->delete('/children/delete', 'ChildController@destroy');
});

$router->group(['prefix' => '/user'], function () use ($router) {
    $router->get('/', 'UserController@index');
    $router->post('/create', 'UserController@store');
    $router->put('/{id}/update', 'UserController@update');
    $router->delete('/{id}/delete', 'UserController@destroy');
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});
