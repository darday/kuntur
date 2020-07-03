<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('film_Titulo');
            $table->string('film_Director');
            $table->integer('film_Anio');            
            $table->string('film_Duracion');
            $table->string('film_Ciudad');
            $table->string('film_Categoria');
            $table->boolean('film_Estado');
            $table->string('film_imagen');
            $table->string('film_Url');
            $table->text('film_Descripcion');
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
        Schema::dropIfExists('films');
    }
}
