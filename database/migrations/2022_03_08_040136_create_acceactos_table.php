<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcceactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceactos', function (Blueprint $table) {
            $table->id();
            $table->integer('actiacce_id')->unsigned()->comment('IDENTIFICADOR DEL ACCESO');
            $table->foreign('actiacce_id')->references('id')->on('actiacces');
            $table->integer('actor_id')->unsigned()->comment('IDENTIFICADOR DEL ACTOR');
            $table->foreign('actor_id')->references('id')->on('actors');
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
        Schema::dropIfExists('acceactos');
    }
}
