<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilmesModel extends Model
{
    protected $fillable = [
        'filme', 'classificacao', 'atores', 'diretor',
    ];
    protected $table = 'filmes';

}
