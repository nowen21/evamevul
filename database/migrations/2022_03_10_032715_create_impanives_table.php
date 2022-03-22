<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpanivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impanives', function (Blueprint $table) {
            $table->id();
            $table->integer('nivel_id')->unsigned()->comment('IDENTIFICADOR DEL NIVEL');
            $table->foreign('nivel_id')->references('id')->on('nivels');
            $table->integer('impacto_id')->unsigned()->comment('IDENTIFICADOR DEL IMPACTO');
            $table->foreign('impacto_id')->references('id')->on('impactos');
            $table->double('impanive',5,2);
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
        Schema::dropIfExists('impanives');
    }
}
