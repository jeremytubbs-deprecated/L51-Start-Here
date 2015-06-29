<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// homepage
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@getHome']);

// contact page
Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@getContact']);

// routes for auth
Route::get('auth/register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);
Route::get('password/forgot', ['as' => 'auth.forgot', 'uses' => 'Auth\PasswordController@getEmail']);
Route::post('password/forgot', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', ['as' => 'auth.reset', 'uses' => 'Auth\PasswordController@getReset']);
Route::post('password/reset/{token}', 'Auth\PasswordController@postReset');

// admin pages
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function()
{
    Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'Admin\DashboardController@getDashboard']);
    // blog crud
    Route::resource(config('blog.base_uri'), 'Blog\Admin\PostsController', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
});

// blog pages
Route::get(config('blog.base_uri'), ['as' => 'blog.getPosts', 'uses' => 'Blog\PostsController@getPosts']);

Route::get(config('blog.base_uri').'/{year}',
	['as' => 'blog.getPostsByYear', 'uses' => 'Blog\PostsController@getPostsByYear']
)->where('year', '(?:19|20)\d{2}');

Route::get(config('blog.base_uri').'/{year}/{month}',
	['as' => 'blog.getPostsByMonth', 'uses' => 'Blog\PostsController@getPostsByMonth']
)->where(['year' => '(?:19|20)\d{2}', 'month' => '1[0-2]|0[1-9]']);

Route::get(config('blog.base_uri').'/{post}', ['as' => 'blog.show', 'uses' => 'Blog\PostsController@showPost']);
