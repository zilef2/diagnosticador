<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactorInternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factor_interno', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->double('calificacion');
            $table->integer('peso');
            $table->double('final');

            $table->foreignId('factor_clave_exito_id');
            $table->foreign('factor_clave_exito_id')->references('id')->on('factor_clave_exito');
        });

        Schema::table('preguntas', function (Blueprint $table) {
            $table->foreign('factor_interno_id')->references('id')->on('factor_interno');
            $table->foreign('sector_economico_id')->references('id')->on('sector_economico');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('factor_interno');
    }
}
