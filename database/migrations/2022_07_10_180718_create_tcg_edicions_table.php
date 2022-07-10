<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTcgEdicionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcg_edicions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tcg_id');
            $table->foreign('tcg_id')->references('id')->on('tcgs');
            $table->unsignedBigInteger('edicion_id');
            $table->foreign('edicion_id')->references('id')->on('edicions');
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
        Schema::dropIfExists('tcg_edicions');
    }
}
