<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SectorPreguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('sector_preguntas', function (Blueprint $table) {
//
//            $table->id();
//            $table->timestamps();
//
//            $table->foreignId('sector_economico_id');
//            $table->foreignId('pregunta_id');
//            $table->foreign('sector_economico_id')->references('id')->on('sector_economico');
//            $table->foreign('pregunta_id')->references('id')->on('preguntas');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
