<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVulnerabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vulnerabs', function (Blueprint $table) {
            $table->id();
            $table->string('vulnerab',300);
            $table->integer('activo_id')->unsigned()->comment('IDENTIFICADOR DEL ACTIVO');
            $table->foreign('activo_id')->references('id')->on('activos');
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
        Schema::dropIfExists('vulnerabs');
    }
}
