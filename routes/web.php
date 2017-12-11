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

Route::get('/', 'HomeController@index')->name('home');


Route::get('/tails/{category}', 'TailsController@search')->name('tails');

Route::get('/members/{category}', 'MembersController@search')->name('members');

Route::get('/auth/signin', 'LoginController@show')->name('auth.signin');
Route::get('/auth/signup', 'AuthController@signup')->name('auth.signup');
