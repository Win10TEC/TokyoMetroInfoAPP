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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainOpeStatusController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('status/index');
});

//Route::get('/status/index', function () {
//    return view('/status', 'TrainOpeStatusController');
//});

//Route::get('/status/index', function () {
//    Route::resource('item', 'TrainOpeStatusController');
//});
//Route::get('/status/index', 'TrainOpeStatusController@index');

Route::resource('item', 'TrainOpeStatusController');
