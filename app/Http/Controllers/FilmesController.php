<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App\FilmesModel;

/**
 * Classe do Controler Filmes
 *
 * @copyright (c) 2020, Cleberli da Rocha
 */
class FilmesController extends Controller
{    
    /**
     * O método index retorna a tela principal com a lista de todos os filmes cadastrados
     *
     * @return view filmes
     */
    public function index() {
        return view("filmes");
    }
        
    /**
     * O método edit envia o id do filme que o usuário deseja editar para view
     *
     * @param  object $id = id do filme a ser editado
     * @return void
     */
    public function edit($id) {
        $filme = FilmesModel::Find($id);
        return view("/filme", compact('filme'));
    }

}
