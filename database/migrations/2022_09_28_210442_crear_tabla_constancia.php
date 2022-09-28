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
        Schema::create('constancia', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",145);
            $table->string("tipo",45);
            $table->string("archivo",145);
            $table->unsignedBigInteger("solicitud_id");
            $table->timestamps();

            $table->foreign("solicitud_id")->references("id")->on("solicitud");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constancia');
    }
};
