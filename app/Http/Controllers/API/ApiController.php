<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use App\FilmesModel;

/**
 * Classe do Controler API
 *
 * @copyright (c) 2020, Cleberli da Rocha
 */
class ApiController extends Controller
{    
    /**
     * O método index retorna todos os filmes do catálogo
     *
     * @return void
     */
    public function index() {
        return FilmesModel::all();
    }
    
    /**
     * O método store cadastra no banco os dados do filme pelo método post
     *
     * @param  object $request = dados do filme vindo do método post
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
        return redirect('/home');
    }
    
    /**
     * O método update atualiza os dados de um filme
     *
     * @param  object $request
     * @param  object $id = id do filme a ser atualizado
     * @return void
     */
    public function update(Request $request, $id) {
        FilmesModel::find($id)->update($request->all());
        return redirect('/home');
    }
    
    /**
     * O método destroy exclui o filme do catálogo
     *
     * @param  object $id = id do filme a ser excluído
     * @return void
     */
    public function destroy($id) {
        $filme = FilmesModel::Find($id);
        $filme -> delete();
        return redirect('/home');
    }

}
