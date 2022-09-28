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
        Schema::create('mensaje_alumno', function (Blueprint $table) {
            $table->unsignedBigInteger("mensaje_id");
            $table->unsignedBigInteger("alumno_id");

            $table->foreign("mensaje_id")->references('id')->on("mensaje");
            $table->foreign("alumno_id")->references('id')->on("alumno");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensaje_alumno');
    }
};
