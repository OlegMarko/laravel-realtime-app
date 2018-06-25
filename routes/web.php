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

Route::group([
    'prefix' => 'start'
], function () {
    Route::get('/', 'StartController@index');
    Route::get('/get-data', 'StartController@getJSON');
    Route::get('/data-chart', 'StartController@dataChart');
    Route::get('/random-chart', 'StartController@randomChart');
    Route::get('/new-event', 'StartController@newEvent');
    Route::get('/send-message','StartController@sendMessage');
    Route::get('/send-private-message', 'StartController@sendPrivateMessage');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
