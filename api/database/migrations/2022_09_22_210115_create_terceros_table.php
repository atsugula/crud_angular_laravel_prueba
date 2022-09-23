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
        Schema::create('terceros', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('numero_identificacion');
            $table->string('nombre1');
            $table->string('nombre2')->default('NULL');
            $table->string('apellido1');
            $table->string('apellido2')->default('NULL');

            $table->BigInteger('departamento_id');
            $table->BigInteger('ciudad_id');
            $table->BigInteger('tipo_tercero_id');
            $table->BigInteger('tipo_contribuyente_id');
            $table->BigInteger('tipo_identificacion_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terceros');
    }
};
