<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActoherrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actoherrs', function (Blueprint $table) {
            $table->id();
            $table->integer('herramie_id')->unsigned()->comment('IDENTIFICADOR DE LA HERRAMIENTA');
            $table->foreign('herramie_id')->references('id')->on('herramies');
            $table->integer('vulnacto_id')->unsigned()->comment('IDENTIFICADOR DE LA vulnactoILIDAD');
            $table->foreign('vulnacto_id')->references('id')->on('vulnactos');
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
        Schema::dropIfExists('actoherrs');
    }
}
