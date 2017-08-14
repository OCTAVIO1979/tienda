<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('tel');
            $table->string('wp');
            $table->string('email');
            $table->string('modelo');
            $table->string('imei');
            $table->string('ref');
            $table->string('falla');
            $table->integer('preinicial');
            $table->string('reparacion');
            $table->integer('prefinal');
            $table->date('fechaentrega');
            $table->string('tecnico');
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
        Schema::dropIfExists('equipos');
    }
}
