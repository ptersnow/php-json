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

$router->get('/users', 'UserController@index');
$router->post('/user', 'UserController@create');
$router->get('/user/{id}', 'UserController@show');
$router->put('/user/{id}', 'UserController@update');
$router->delete('/user/{id}', 'UserController@destroy');

$router->get('/posts', 'PostController@index');
$router->post('/post', 'PostController@create');
$router->get('/post/{id}', 'PostController@show');
$router->put('/post/{id}', 'PostController@update');
$router->delete('/post/{id}', 'PostController@destroy');

$router->get('/comments', 'CommentController@index');
$router->post('/comment', 'CommentController@create');
$router->get('/comment/{id}', 'CommentController@show');
$router->put('/comment/{id}', 'CommentController@update');
$router->delete('/comment/{id}', 'CommentController@destroy');
