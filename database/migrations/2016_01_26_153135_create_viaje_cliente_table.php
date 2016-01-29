<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViajeClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaje_cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('viaje_id')->unsigned();
            $table->index('viaje_id');
            $table->foreign('viaje_id')->references('id')->on('viaje');
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
        Schema::drop('viaje_cliente');
    }
}
