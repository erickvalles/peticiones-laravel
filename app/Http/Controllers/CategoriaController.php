<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoriaController extends Controller
{
    public function insertar(){
        //DB::insert('insert into categoria (nombre) values (?)', ['Días festivos']);
        /*DB::table('categoria')->insert([
            ["nombre"=>"Baja de materias"],
            ["nombre"=>"Alta de materias"]
        ]);*/
        /*$categoria = new Categoria();
        $categoria->nombre = "Servicio Social";*/
        /*$categoria = Categoria::make([
            "nombre"=>"Prácticas profesionales"
        ]);
        $categoria->save();
        */

        $categoria = Categoria::create([
            "nombre"=>"Fraternidad"
        ]);
        return $categoria;
    }

    public function consultar(){
        //$categorias = DB::select('select * from categoria'); //retorna un arreglo
        /*$categorias = DB::table('categoria')
            ->select('nombre')->get(); //retorna una colección*/
        $categorias = Categoria::all();

        /*$categorias->each(function ($categoria, $key) {
            echo strtoupper($categoria->nombre);
        });*/
        dd($categorias);
    }

    public function actualizar(){
        /*$afectados = DB::table('categoria')->where('id','=',4)
        ->update(["nombre"=>"Alta en el IMSS"]);*/

        try{
            $categoria = Categoria::findOrFail(70);
            $categoria->nombre = "Proyecto de investigación";
            $categoria->save();
            return $categoria;
        }catch(ModelNotFoundException $e){
            return $e->getMessage();
        }

    }

    public function borrar(){
        $categoria = Categoria::find(5);
        $categoria->delete();
        return "categoría eliminada: ".$categoria->nombre;
    }

    public function categoriasEliminadas(){
        $eliminadas = Categoria::onlyTrashed()->restore();

        return $eliminadas;
    }
}
