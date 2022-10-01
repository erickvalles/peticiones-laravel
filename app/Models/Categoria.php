<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "categoria";
    public $timestamps = false;

    protected $fillable = ["nombre"];

    public function preguntasFrecuentes(){
        return $this->hasMany(PreguntaFrec::class);
    }
}
