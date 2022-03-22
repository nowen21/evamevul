<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProbsumasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('probsumas', function (Blueprint $table) {
            $table->id();
            $table->integer('motiresu_id')->unsigned()->comment('IDENTIFICADOR DEL MOTIVO-RESULTADO');
            $table->foreign('motiresu_id')->references('id')->on('motiresus');
            $table->integer('nivel_id')->unsigned()->comment('IDENTIFICADOR DEL NIVEL');
            $table->foreign('nivel_id')->references('id')->on('nivels');
            $table->double('totaprob',3,2)->unsigned()->comment('SUMA DE TODAS LAS PROBABILIDADES QUE TIENE ESE RESULTADO');
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
        Schema::dropIfExists('probsumas');
    }
}
