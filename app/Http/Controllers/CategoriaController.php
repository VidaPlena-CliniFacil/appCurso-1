<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;

class CategoriaController extends Controller
{
    //abri o formulario de cadastro
    public function mostrarFormCat(){
        return view('cad_categoria');
    }
    public function index(){
        return view('index');
    }
    public function mostrarFormCurso(){
        return view('cad_curso');
    }
    public function mostrarFormAula(){
        return view('cad_aula');
    }


    public function cadastroCat(Request $request){
        $registrosCat = $request->validate([
        'nomecategoria' => 'string|required'
        ]);

        Categoria::create($registrosCat);

        return Redirect::route('index');
    }

    public function cadastroCurso(Request $request){
        $registrosCurso = $request->validate([
        'nomecurso' => 'string|required',
        'cargahoraria'=> 'string|required',
        'valor'=> 'string|required',
        ]);

        Categoria::create($registrosCurso);

        return Redirect::route('index');
    }
}
