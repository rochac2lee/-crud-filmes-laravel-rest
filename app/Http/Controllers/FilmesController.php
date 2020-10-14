<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App\FilmesModel;

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
     * O método store valida se todos os campos foram preenchidos e envia ao Modal para salvar no Banco de Dados
     *
     * @param  object $request recebe todas as informações do POST
     * @return void
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'filme' => 'required',
            'classificacao' => 'required',
            'atores' => 'required',
            'diretor' => 'required',
        ]);

        $FilmesModel = new FilmesModel;
        $FilmesModel -> filme = $request -> input('filme');
        $FilmesModel -> classificacao = $request -> input('classificacao');
        $FilmesModel -> atores = $request -> input('atores');
        $FilmesModel -> diretor = $request -> input('diretor');
        $FilmesModel -> save();
        return redirect('/filmes');
    }
}
