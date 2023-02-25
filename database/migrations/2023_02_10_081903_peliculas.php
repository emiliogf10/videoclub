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
        Schema::create('peliculas',function(Blueprint $table){
            $table->engine="InnoDB";
            $table->id();
            $table->string('nombre');
            $table->bigInteger('generoId')->unsigned();
            $table->foreign('generoId')->references('id')->on('generos')->cascadeOnDelete();
            $table->string('duracion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('peliculas');
    }
};
