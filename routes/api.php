<?php

use Illuminate\Http\Request;

Route::namespace("API") -> name('api.') -> group(function() {

    /**Rota para listar todos os Filmes */
    Route::get('/filmes', 'ApiController@index') -> name('filmes');

    /** Rota para exclusão de Filmes */
    Route::get('/filmes/deletar/{id}', 'ApiController@destroy') -> name('destroy');
});
