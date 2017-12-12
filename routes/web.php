<?php

Route::get('/', 'PostsController@index' );

Route::get('/posts/{post}', 'PostsController@show' );

Route::get('/posts/create/', 'PostsController@create' );

Route::get('/posts', 'PostsController@index' );

Route::post('/posts', 'PostsController@store');
/*
 * GET /posts
 * GET /posts/create
 * POST /posts
 * GET /posts/{id}/edit
 * GET /posts/{id}
 * PATCH /posts/{id}
 * DELTEE /posts/{id}
 */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
