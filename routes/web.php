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

Route::resource('jogador', 'JogadorController');

Route::resource('personagem', 'PersonagemController');

Route::resource('administrador', 'AdministradorController');


Route::get('/home', function () {
    return view('home');
})->name('home');
/*

Route::post('/cad_personagem', function () {
    return view('cad_personagem');
})->name('cad_personagem');
Route::get('/cad', function () {
    return view('cad');
})->name('cad');


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
*/