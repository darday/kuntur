<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionFilmUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion_film_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('calificacion_id')->references('id')->on('calificacions')->onDelete('cascade');
            $table->foreignId('film_id')->references('id')->on('films')->onDelete('cascade');   
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');   

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
        Schema::dropIfExists('calificacion_film_user');
    }
}
