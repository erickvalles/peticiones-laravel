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
        Schema::create('expediente', function (Blueprint $table) {
            $table->id();
            $table->string("ciclo_ingreso",5);
            $table->string("semestre",2);
            $table->float("prom_ingreso");
            $table->unsignedBigInteger("alumno_id");
            $table->timestamps();

            $table->foreign("alumno_id")->references('id')->on("alumno")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expediente');
    }
};
