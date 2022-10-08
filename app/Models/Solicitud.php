<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table = "solicitud";

    public function solicitante(){
        return $this->belongsTo(Alumno::class,'alumno_id','id');
    }

    public function cambios(){
        return $this->hasMany(Seguimiento::class,'solicitud_id','id');
    }

}
