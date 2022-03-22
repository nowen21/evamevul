<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResuprobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resuprobs', function (Blueprint $table) {
            $table->id();
            $table->integer('probabil_id')->unsigned()->comment('IDENTIFICADOR DEL MOTIVO');
            $table->foreign('probabil_id')->references('id')->on('probabils');
            $table->integer('motiresu_id')->unsigned()->comment('IDENTIFICADOR DEL RESULTADO');
            $table->foreign('motiresu_id')->references('id')->on('motiresus');
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
        Schema::dropIfExists('resuprobs');
    }
}
