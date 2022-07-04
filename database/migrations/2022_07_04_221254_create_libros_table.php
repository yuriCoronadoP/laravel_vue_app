<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('autor');
            $table->string('titulo');
            $table->string('edicion')->nullable();
            $table->string('datos_publicacion')->nullable();
            $table->string('tipo_contenido')->nullable();
            $table->string('reestricciones')->nullable();
            $table->string('materia')->nullable();
            $table->string('proveedor')->nullable();
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
        Schema::dropIfExists('libros');
    }
}
