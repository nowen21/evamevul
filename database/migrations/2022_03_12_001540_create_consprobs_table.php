<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsprobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consprobs', function (Blueprint $table) {
            $table->id();
            $table->integer('consecue_id')->unsigned()->comment('IDENTIFICADOR DEL MOTIVO-RESULTADO');
            $table->foreign('consecue_id')->references('id')->on('consecues');
            $table->integer('probabil_id')->unsigned()->comment('IDENTIFICADOR DEL MOTIVO-RESULTADO');
            $table->foreign('probabil_id')->references('id')->on('probabils');
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
        Schema::dropIfExists('consprobs');
    }
}
