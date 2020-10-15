<?php

use Illuminate\Http\Request;

Route::namespace("API") -> name('api.') -> group(function() {

    /**Rota para listar todos os Filmes */
    Route::get('/filmes', 'ApiController@index') -> name('filmes');

    Route::post('/filmes', 'Apicontroller@store') -> name('filmes.store');

    Route::put('/filme/atualizar/{id}', 'ApiController@update') -> name('filme.update');

    /** Rota para exclusão de Filmes */
    Route::get('/filme/deletar/{id}', 'ApiController@destroy') -> name('filme.destroy');
    
});

