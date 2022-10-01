<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumno extends Model
{
    use HasFactory;
    protected $table = "alumno";

    public function expediente(){
        return $this->hasOne(Expediente::class);
    }

    public function mensajes(){
        return $this->belongsToMany(Mensaje::class,'mensaje_alumno');
    }
}
