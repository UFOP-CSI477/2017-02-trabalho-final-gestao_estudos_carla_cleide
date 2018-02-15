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

Route::get('/index', function () {
    return view('layout/principal');
});
Route::get('/horario', function () {
    return view('horario');
});

Route::get('/calendario', function () {
    return view('calendario');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
