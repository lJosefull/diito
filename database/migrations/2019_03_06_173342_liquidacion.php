<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Liquidacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('liquidacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('documento');
            $table->string('asociado');
            $table->string('empresa');
            $table->string('pagare');
            $table->string('responsable');
            $table->time('fecha_de_rembolso');
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
        //
    }
}
