<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiaccesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actiacces', function (Blueprint $table) {
            $table->id();
            $table->integer('activo_id')->unsigned()->comment('IDENTIFICADOR DEL ACTIVO');
            $table->foreign('activo_id')->references('id')->on('activos');
            $table->integer('acceso_id')->unsigned()->comment('IDENTIFICADOR DEL ACCESO');
            $table->foreign('acceso_id')->references('id')->on('accesos');
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
        Schema::dropIfExists('actiacces');
    }
}
