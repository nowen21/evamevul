<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotiresusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motiresus', function (Blueprint $table) {
            $table->id();
            $table->integer('actomoti_id')->unsigned()->comment('IDENTIFICADOR DEL MOTIVO');
            $table->foreign('actomoti_id')->references('id')->on('actomotis');
            $table->integer('resultad_id')->unsigned()->comment('IDENTIFICADOR DEL RESULTADO');
            $table->foreign('resultad_id')->references('id')->on('resultads');
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
        Schema::dropIfExists('motiresus');
    }
}
