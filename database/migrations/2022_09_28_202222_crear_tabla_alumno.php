<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->id();
            $table->string("codigo",11);
            $table->string("nombre",100);
            $table->string("ap",50)->nullable();
            $table->string("am",50)->nullable();
            $table->string("correo",50);
            $table->string("genero",5);
            $table->string("estatus",50);
            $table->unsignedBigInteger("carrera_id");
            $table->timestamps();

            $table->foreign("carrera_id")->references('id')->on("carrera");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno');
    }
};
