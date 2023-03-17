<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactorClaveExitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factor_clave_exito', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');

            $table->foreignId('se_id');
            $table->foreign('se_id')->references('id')->on('sector_economico');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factor_clave_exito');
    }
}
