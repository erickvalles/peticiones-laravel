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
        Schema::create('seguimiento', function (Blueprint $table) {
            $table->id();
            $table->string("nota",245);
            $table->unsignedBigInteger("solicitud_id");
            $table->unsignedBigInteger("status_id");
            $table->timestamps();

            $table->foreign("solicitud_id")->references("id")->on("solicitud");
            $table->foreign("status_id")->references("id")->on("status");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguimiento');
    }
};
