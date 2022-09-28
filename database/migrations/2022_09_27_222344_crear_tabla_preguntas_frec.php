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
        Schema::create('preguntas_frec', function (Blueprint $table) {
            $table->id();
            $table->string("pregunta",250);
            $table->mediumText("respuesta");
            $table->unsignedBigInteger("categoria_id");
            $table->unsignedBigInteger("carrera_id");
            $table->timestamps();

            $table->foreign('categoria_id')->references("id")->on("categoria");
            $table->foreign("carrera_id")->references("id")->on("carrera");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Âpreguntas_frec');
    }
};
