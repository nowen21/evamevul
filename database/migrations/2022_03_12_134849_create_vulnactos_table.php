<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVulnactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vulnactos', function (Blueprint $table) {
            $table->id();
            $table->integer('actor_id')->unsigned()->comment('IDENTIFICADOR DEL ACTOR');
            $table->foreign('actor_id')->references('id')->on('actors');
            $table->integer('vulnerab_id')->unsigned()->comment('IDENTIFICADOR DE LA VULNERABILIDAD');
            $table->foreign('vulnerab_id')->references('id')->on('vulnerabs');
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
        Schema::dropIfExists('vulnactos');
    }
}
