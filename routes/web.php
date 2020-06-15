<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/admin/create','RoomController@create');
Route::post('/rooms','RoomController@store');

Route::get('/home','RoomController@home')->name('home');
Route::get('/rooms/dashboard','RoomController@index')->name('dashboard');
