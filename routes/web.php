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

Route::get('/', 'TrainOpeStatusController@index');
Route::get('/station', 'TrainStationController@index');
Route::get('/time', 'TrainTimeController@index');
Route::post('/time', 'TrainTimeController@post');
