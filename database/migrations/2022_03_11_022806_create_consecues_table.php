<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsecuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consecues', function (Blueprint $table) {
            $table->id();
            $table->string('consecue',100);
            $table->integer('tconsecu_id')->unsigned()->comment('IDENTIFICADOR DEL MOTIVO-RESULTADO');
            $table->foreign('tconsecu_id')->references('id')->on('tconsecus');
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
        Schema::dropIfExists('consecues');
    }
}
