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
        Schema::create('elementos_listas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->unsignedBigInteger('tipo_lista_id');

            $table->foreign('tipo_lista_id')->references('id')->on('tipos_listas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elementos_listas');
    }
};
