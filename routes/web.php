<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome',["nombre_curso"=>"Curso UNAM"]); //1

    $nombre_curso = "Curso de Laravel";
    $arreglo = [1,2,3,4,5,6];
    //return view('welcome')->with(["nombre_curso"=>$nombre_curso,"arr"=>$arreglo]); //2
    return view('welcome',compact('nombre_curso','arreglo')); //3

});

Route::get('saludo/{nombre?}', function($nombre="Invitado"){
    $estado = "Jalisco";
    $arreglo = [3,4,5,1,2,4];
    return view('saludar',compact('nombre','arreglo'));
})->where('nombre',"[aA-zZ]+")->name("ruta_saludo");

Route::get('prueba',[CategoriaController::class,'insertar']);
Route::get('consultar',[CategoriaController::class,'consultar']);
Route::get('actualizar',[CategoriaController::class,'actualizar']);
