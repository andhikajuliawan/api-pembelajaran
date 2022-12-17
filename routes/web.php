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

//Get Data
$router->get('/index', 'ExampleController@index');
// Get Category
$router->get('/categories', 'ExampleController@categories');
// Get Data by Category
$router->get('/categories/{id}', 'ExampleController@category_index');
// Get Data by Status
$router->get('/status/{id}', 'ExampleController@status_index');

// Read, Update, Delete Data
$router->post('/create', 'ExampleController@create');
$router->post('/update/{id}', 'ExampleController@update');
$router->post('/delete/{id}', 'ExampleController@delete');
