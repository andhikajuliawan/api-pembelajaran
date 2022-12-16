<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\NoteController;

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/index', 'ExampleController@index');
$router->post('/create', 'ExampleController@create');
$router->put('/update/{id}', 'ExampleController@update');
$router->delete('/delete/{id}', 'ExampleController@delete');
