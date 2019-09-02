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

Route::get('/invitation', 'WebController@invitation')->name('invitation');
Route::get('/rsvp', 'WebController@rsvp')->name('rsvp');
Route::get('/registries', 'WebController@registries')->name('registries');
Route::get('/info', 'WebController@info')->name('info');
Route::get('/ander', 'WebController@ander')->name('ander');
Route::get('/home', 'WebController@home')->name('home');
