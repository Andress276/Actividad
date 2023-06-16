<?php
use App\Http\Controllers\ParesController;
use App\Http\Controllers\PrimosController;
use App\Http\Controllers\CursoControler;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('sumanormal', [Cursocontroler ::class,'numerosAmigos']);

Route::get('pares/{numero1}/{numero2}', [ParesController ::class,'ParImpar']);

Route::get('primos/{numero1}', [PrimosController ::class,'Primos']);

