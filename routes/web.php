<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ClienteController@home')->name('home');

Route::group(['prefix' => '/cliente'], function () {
    Route::get('/cadastro', 'ClienteController@cadastro')->name('cliente.cadastro')->middleware('logado');
    Route::post('/cadastrar', 'ClienteController@cadastrar')->name('cliente.cadastrar');
    Route::get('/login', 'ClienteController@login')->name('cliente.login')->middleware('logado');
    Route::post('/logar', 'ClienteController@logar')->name('cliente.logar');
    Route::get('/sair', 'ClienteController@sair')->name('cliente.sair');
});
