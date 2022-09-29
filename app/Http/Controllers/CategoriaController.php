<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function insertar(){
        //DB::insert('insert into categoria (nombre) values (?)', ['Días festivos']);
        DB::table('categoria')->insert([
            ["nombre"=>"Baja de materias"],
            ["nombre"=>"Alta de materias"]
        ]);
    }

    public function consultar(){
        //$categorias = DB::select('select * from categoria'); //retorna un arreglo
        /*$categorias = DB::table('categoria')
            ->select('nombre')->get(); //retorna una colección*/
        $categorias = Categoria::where('nombre','like','%materia%')->get();

        $categorias->each(function ($categoria, $key) {
            echo strtoupper($categoria->nombre);
        });
        dd($categorias);
    }

    public function actualizar(){
        $afectados = DB::table('categoria')->where('id','=',4)
        ->update(["nombre"=>"Alta en el IMSS"]);

        return $afectados;
    }
}
