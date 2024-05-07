<?php

use Illuminate\Support\Facades\Route;



Route::get('/fornecedores', 'FornecedorController@index')->name('site.fornecedor');

Route::prefix('/app')->group(function(){
    Route::get('/fornecedores','FornecedoresController@index')->name('app.fornecedores');
});



