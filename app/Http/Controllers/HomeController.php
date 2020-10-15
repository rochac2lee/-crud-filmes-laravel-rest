<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App\FilmesModel;

/**
 * Classe do Controler Home
 *
 * @copyright (c) 2020, Cleberli da Rocha
 */
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
