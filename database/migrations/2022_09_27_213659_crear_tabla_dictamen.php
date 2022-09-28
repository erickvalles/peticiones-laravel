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
        Schema::create('dictamen', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",45);
            $table->string("dictamen",145);
            $table->unsignedBigInteger("carrera_id");
            $table->timestamps();

            //llave foranea
            $table->foreign('carrera_id')->references('id')->on('carrera');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dictamen');
    }
};
