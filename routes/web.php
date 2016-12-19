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

Auth::routes();

Route::get('/', 'IndexController@show_index');

Route::get('/contact', 'IndexController@show_contact');

Route::get('/profile', 'ProfileController@show_profile');

Route::post('/profile', 'ProfileController@add_avatar');

Route::get('/add_event', 'EventController@show_add_event');

Route::post('/insert_event', 'EventController@insert_event');