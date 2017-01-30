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

Route::get('/profile', 'ProfileController@show_profile');
Route::post('/profile', 'ProfileController@add_avatar');

Route::get('/add_event', 'EventController@show_add_event');
Route::post('/insert_event', 'EventController@insert_event');

Route::get('/event_details/{id}', 'EventController@details');
Route::get('/my_events', 'EventController@show_my_events');
Route::post('/add_comment', 'EventController@add_comment');

Route::get('/about', 'IndexController@show_about');
Route::get('/contact', 'IndexController@show_contact');

Route::get('/going/{id}', 'EventController@add_going');
Route::get('/interested/{id}', 'EventController@add_interested');

Route::post('/insert_video/', 'VideoController@insert_video');


