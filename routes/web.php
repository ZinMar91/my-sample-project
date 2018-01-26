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

// Admin route
Route::get('/admin', 'AdminController@index')->name('admin');

// Authentication routes
Route::get('login', 'Auth\AuthController@showLoginForm')->name('login');
Route::post('login', 'Auth\AuthController@login');
Route::post('logout', 'Auth\AuthController@logout')->name('logout');

// home page route
Route::get('/', 'PagesController@index')->name('home');

// Password routes
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Privacy route
Route::get('privacy', 'PagesController@privacy');

// Registration routes
Route::get('register', 'Auth\AuthController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\AuthController@register');

// Socialite routes
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

// Terms route
Route::get('terms-of-service', 'PagesController@terms');

// test route
Route::get('test', 'TestController@index')->middleware(['auth', 'throttle']);

// Widget routes
Route::get('widget/create', 'WidgetController@create')->name('widget.create');
Route::get('widget/{id}-{slug?}', 'WidgetController@show')->name('widget.show');
Route::resource('widget', 'WidgetController', ['except' => ['show', 'create']]);

// Profile
Route::get('show-profile', ['as' => 'show-profile', 'uses' => 'ProfileController@showProfileToUser']);
Route::get('my-profile', ['as' => 'my-profile', 'uses' => 'ProfileController@myProfile']);
Route::resource('profile', 'ProfileController');

Route::resource('user', 'UserController');

Route::get('settings', 'SettingsController@edit');
Route::post('settings', ['as' => 'userUpdate', 'uses' => 'SettingsController@update']);




