<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Home
 */
Route::get('/', [
    'uses' => '\Chatty\Http\Controllers\HomeController@index',
    'as' => 'home',
]);

/**
 * Authentication
 */
Route::get('/signup', [
    'uses' => '\Chatty\Http\Controllers\AuthController@getSignup',
    'as' => 'auth.signup',
]);
Route::post('/signup', [
    'uses' => '\Chatty\Http\Controllers\AuthController@postSignup',
]);
