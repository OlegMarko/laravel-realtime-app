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

Route::get('/start', 'StartController@index');
Route::get('/start/get-data', 'StartController@getJSON');
Route::get('/start/data-chart', 'StartController@dataChart');
Route::get('/start/random-chart', 'StartController@randomChart');
Route::get('/start/new-event', 'StartController@newEvent');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
