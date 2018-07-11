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

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/cad', function () {
    return view('cad');
})->name('cad');

Route::post('/cad_personagem', function () {
    return view('cad_personagem');
})->name('cad_personagem');

Route::get('/continuar', function () {
    return view('continuar');
})->name('continuar');

Route::get('/erro', function () {
    return view('erro');
})->name('erro');

//coloquei isso abaixo por causa de um formulário
Route::post('/erro', function () {
    return view('erro');
})->name('erro');
