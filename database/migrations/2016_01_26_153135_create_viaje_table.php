<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaje', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paquete_id')->unsigned();
            $table->index('paquete_id');
            $table->foreign('paquete_id')->references('id')->on('paquete');
            $table->integer('cliente_id')->unsigned();
            $table->index('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('users');
            $table->double('monto');
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
        Schema::drop('viaje');
    }
}
