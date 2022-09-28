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
        Schema::create('users_carrera', function (Blueprint $table) {
            $table->unsignedBigInteger("carrera_id");
            $table->unsignedBigInteger("users_id");

            $table->foreign("carrera_id")->references("id")->on("carrera");
            $table->foreign("users_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_carrera');
    }
};
