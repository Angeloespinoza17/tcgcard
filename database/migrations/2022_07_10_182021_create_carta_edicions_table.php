<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartaEdicionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carta_edicions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('edicion_id');
            $table->foreign('edicion_id')->references('id')->on('edicions');
            $table->unsignedBigInteger('cartas_id');
            $table->foreign('cartas_id')->references('id')->on('cartas');
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
        Schema::dropIfExists('carta_edicions');
    }
}
