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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });
$router->get('/', 'PostsController@viewposts');
// Get All Posts Route
$router->get('/getposts', 'PostsController@viewposts');
// Get Single Post By provided ID
$router->get('/post/{post_id}', 'PostsController@singlepost');
