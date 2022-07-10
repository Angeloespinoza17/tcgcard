<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->bigInteger('numero')->nullable();
            $table->string('tipo')->nullable();
            $table->string('frecuencia')->nullable();
            $table->string('fuerza')->nullable();
            $table->string('coste')->nullable();
            $table->string('raza')->nullable();
            $table->string('ilustrador')->nullable();
            $table->string('precio')->nullable();
            $table->string('imagen_dir')->nullable();
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
        Schema::dropIfExists('cartas');
    }
}
