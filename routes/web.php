<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

//para ir para a Index
Route::get('/',[CategoriaController::class,'index'])->name('index');

//para ir para o cadastro do curso
Route::get('/cadcurso',[CategoriaController::class,'mostrarFormCurso'])->name("form-cadastro-curso");
Route::post('/cadcurso',[CategoriaController::class,'cadastroCurso'])->name("cadastro-curso");


//para ir para o cadastro da categoria 
Route::get('/cadcategoria',[CategoriaController::class,'mostrarFormCat'])->name("form-cadastro-categoria");
Route::post('/cadcategoria',[CategoriaController::class,'cadastroCat'])->name("cadastro-categoria");

//para ir para o cadastro da aula 
Route::get('/cadAula',[CategoriaController::class,'mostrarFormAula'])->name("form-cadastro-aula");
Route::post('/cadAula',[CategoriaController::class,'cadastroAula'])->name("cadastro-aula");