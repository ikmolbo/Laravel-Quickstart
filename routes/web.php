<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();
Route::get('/', 'HomeController@index');

Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'UserController@index']);
Route::post('/dashboard/profile', ['uses' => 'UserController@profile']);
Route::get('/dashboard/password', ['as' => 'password', 'uses' => 'UserController@index']);
Route::post('/dashboard/password', ['uses' => 'UserController@password']);

Route::get('/redirect/{provider}', 'Auth\SocialAuthController@redirect');
Route::get('/callback/{provider}', 'Auth\SocialAuthController@callback');

// Dev only
Route::any('adminer', '\Miroc\LaravelAdminer\AdminerAutologinController@index');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('kitchen-sink', function() {
  return view('kitchen-sink');
});
