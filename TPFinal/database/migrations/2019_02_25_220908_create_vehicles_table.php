<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('domain'); //dominio de vehiculo
            $table->string('type'); //tipo de vehiculo
            $table->string('capacitance'); //capacidad de carga de un vehiculo
            $table->string('volume'); //volumen de carga
            $table->integer('cadet_id')->unsigned();
            $table->foreign('cadet_id')->references('id')->on('cadets');
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
        Schema::dropIfExists('vehicles');
    }
}
