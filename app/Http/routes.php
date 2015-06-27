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
Route::get('register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('register', 'Auth\AuthController@postRegister');
Route::get('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);
Route::get('password/forgot', ['as' => 'auth.forgot', 'uses' => 'Auth\PasswordController@getEmail']);
Route::post('password/forgot', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', ['as' => 'auth.reset', 'uses' => 'Auth\PasswordController@getReset']);
Route::post('password/reset/{token}', 'Auth\PasswordController@postReset');

// admin pages
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function()
{
    Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'Admin\DashboardController@getDashboard']);
    Route::resource('posts', 'Blog\PostsController', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
});

// blog pages
Route::get(config('blog.base_uri'), ['as' => 'blog.index', 'uses' => 'Blog\PostsController@index']);
Route::get(config('blog.base_uri').'/{slug}', ['as' => 'blog.show', 'uses' => 'Blog\PostsController@show']);
