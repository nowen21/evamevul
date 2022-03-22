<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResuimpasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resuimpas', function (Blueprint $table) {
            $table->id(); 
            $table->integer('motiresu_id')->unsigned()->comment('IDENTIFICADOR DEL MOTIVO');
            $table->foreign('motiresu_id')->references('id')->on('motiresus');
            $table->integer('impanive_id')->unsigned()->comment('IDENTIFICADOR DEL MOTIVO');
            $table->foreign('impanive_id')->references('id')->on('impanives');
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
        Schema::dropIfExists('resuimpas');
    }
}
