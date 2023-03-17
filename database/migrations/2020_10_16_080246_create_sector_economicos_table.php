<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorEconomicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('sector_economico', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');

        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('sector_id')->references('id')->on('sector_economico');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('users');
        Schema::dropIfExists('sector_economico');
    }
}
