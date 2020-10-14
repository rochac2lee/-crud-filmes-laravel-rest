<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FilmesModel;

class ApiController extends Controller
{
    public function index() {
        return FilmesModel::all();
    }
}
