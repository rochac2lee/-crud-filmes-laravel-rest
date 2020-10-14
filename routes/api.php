<?php

use Illuminate\Http\Request;

Route::namespace("API") -> name('api.') -> group(function() {
    Route::get('/filmes', 'ApiController@index') -> name('filmes');
});
