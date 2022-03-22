<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateProbimpasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('probimpas', function (Blueprint $table) {
            $table->id();
            
            $table->integer('nivel_id')->unsigned()->comment('IDENTIFICADOR DEL NIVEL');
            $table->foreign('nivel_id')->references('id')->on('nivels');

            $table->integer('motiresu_id')->unsigned()->comment('IDENTIFICADOR DEL MOTIVO-RESULTADO');
            $table->foreign('motiresu_id')->references('id')->on('motiresus');
            
            $table->integer('impasuma_id')->unsigned()->nullable()->comment('IDENTIFICADOR DE TOTAL DEL IMPACTO');
            $table->foreign('impasuma_id')->references('id')->on('impasumas');
           
            $table->integer('probsuma_id')->unsigned()->nullable()->comment('IDENTIFICADOR DEL TOTAL DE LA  PROBABILIDADES');
            $table->foreign('probsuma_id')->references('id')->on('probsumas');

            $table->integer('metodo_id')->unsigned()->comment('IDENTIFICADOR DEL METODO');
            $table->foreign('metodo_id')->references('id')->on('metodos');
         
            $table->double('riesgoxx',5,2);

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
        Schema::dropIfExists('probimpas');
    }
}
