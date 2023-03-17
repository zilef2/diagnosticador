<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserPreguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_preguntas', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->integer('value');


            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('pregunta_id');
            $table->foreign('pregunta_id')->references('id')->on('preguntas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down(){

    }
}
