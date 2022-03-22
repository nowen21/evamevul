<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProbabilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('probabils', function (Blueprint $table) {
            $table->id();
            $table->double('probabil',5,2);
            $table->integer('nivel_id')->unsigned()->comment('IDENTIFICADOR DEL NIVEL');
            $table->foreign('nivel_id')->references('id')->on('nivels');
            $table->integer('tipoprob_id')->unsigned()->comment('IDENTIFICADOR DEL TIPO DE PROBABILIDAD');
            $table->foreign('tipoprob_id')->references('id')->on('tipoprobs');

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
        Schema::dropIfExists('probabils');
    }
}
