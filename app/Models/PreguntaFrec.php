<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreguntaFrec extends Model
{
    use HasFactory;
    protected $table = "preguntas_frec";
    protected $fillable = ["pregunta","respuesta","categoria_id","carrera_id"];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
