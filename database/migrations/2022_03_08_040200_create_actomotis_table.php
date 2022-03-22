<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActomotisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actomotis', function (Blueprint $table) {
            $table->id();
            $table->integer('acceacto_id')->unsigned()->comment('IDENTIFICADOR DEL ACTOR');
            $table->foreign('acceacto_id')->references('id')->on('acceactos');
            $table->integer('motivo_id')->unsigned()->comment('IDENTIFICADOR DEL MOTIVO');
            $table->foreign('motivo_id')->references('id')->on('motivos');
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
        Schema::dropIfExists('actomotis');
    }
}
