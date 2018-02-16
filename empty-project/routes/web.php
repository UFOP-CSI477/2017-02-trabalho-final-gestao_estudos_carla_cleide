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

Route::get('events', 'EventController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/disciplina1', 'Disciplina1Controller@show');

Route::get('/disciplina2', function () {
    return view('disciplina2');
});

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/horario', function () {
    return view('horario');
});