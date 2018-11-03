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
Route::get('/','TaskController@index');
Route::get('/tasks/archive','TaskController@archive');
Route::resource('tasks','TaskController');
Route::get('/tasks/{id}/mark','TaskController@mark');
Route::get('/tasks/{id}/remark','TaskController@remark');
