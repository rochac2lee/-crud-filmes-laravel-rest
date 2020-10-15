<?php

use Illuminate\Http\Request;

Route::namespace("API") -> name('api.') -> group(function() {

    /**Rota para listar todos os Filmes */
    Route::get('/filmes', 'ApiController@index') -> name('filmes');

    /**Rota para cadastrar um novo Filme */
    Route::post('/filmes', 'Apicontroller@store') -> name('filmes.store');

    /**Rota para atualizar um Filme */
    Route::put('/filme/atualizar/{id}', 'ApiController@update') -> name('filme.update');

    /** Rota para excluir um Filme */
    Route::get('/filme/deletar/{id}', 'ApiController@destroy') -> name('filme.destroy');
    
});

