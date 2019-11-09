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

Route::get('/', function () {
    return view('welcome');
});


// Events
Route::get('/events', 'EventController@index');
Route::get('/eventFetchList', 'EventController@eventFetchList');
Route::post('/save_event', 'EventController@save_event');
Route::post('/update_event', 'EventController@update_event');
Route::get('/GetEvent/{id}', 'EventController@GetEvent');


Route::get('/events/{id}', 'EventController@GetEventDetail');


Route::get('/user_verify', 'EventController@user_verify');
// Users
Route::get('/users', 'UserController@index');

// Sessions
Route::get('/sessions', 'SessionController@index');
