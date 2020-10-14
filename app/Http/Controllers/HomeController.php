<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App\FilmesModel;

class HomeController extends Controller
{    
    /**
     * O método index retorna a tela principal com a lista de todos os filmes cadastrados
     *
     * @return view home
     */
    public function index() {
        $filmes = DB::table('filmes') -> simplePaginate(15);
        return view("/home", ['filmes' => $filmes]);
    }
    
}
