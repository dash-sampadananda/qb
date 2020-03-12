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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

resource($router, 'branches', 'Api\v1\BranchesController');

function resource($router, $uri, $controller)
{
	$router->get($uri, $controller.'@index');
	$router->post($uri, $controller.'@store');
	$router->get($uri.'/{id}', $controller.'@show');
	$router->put($uri.'/{id}', $controller.'@update');
	$router->patch($uri.'/{id}', $controller.'@update');
	$router->delete($uri.'/{id}', $controller.'@destroy');
}