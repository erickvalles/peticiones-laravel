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
        Schema::create('solicitud', function (Blueprint $table) {
            $table->id();
            $table->string("detalle",250);
            $table->string("estatus_actual",45);
            $table->string("archivo",145);
            $table->unsignedBigInteger("tramite_id");
            $table->unsignedBigInteger("alumno_id");
            $table->timestamps();

            $table->foreign("tramite_id")->references("id")->on("tramite");
            $table->foreign("alumno_id")->references("id")->on("alumno");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud');
    }
};
