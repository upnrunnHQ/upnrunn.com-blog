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
// Home Page for retrieving posts controller.
$router->get('/', 'PostsController@viewposts');
// Get Single Post By provided ID
$router->get('/post/{post_id}', 'PostsController@singlepost');
