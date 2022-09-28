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
        Schema::create('user_tipo', function (Blueprint $table) {
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('tipo_id');

            $table->foreign('users_id')->references('id')->on("users");
            $table->foreign('tipo_id')->references('id')->on("tipo");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_tipo');
    }
};
