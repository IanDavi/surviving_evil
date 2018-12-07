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
Auth::routes();

Route::resource('jogador', 'JogadorController');

Route::resource('personagem', 'PersonagemController');

Route::resource('redirect', 'RedirectController');

Route::get('/home', function () {
    return view('home');
})->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
