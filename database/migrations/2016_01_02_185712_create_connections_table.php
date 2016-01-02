<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('connections', function($t)
        {
            $t->increments('ID')->unsigned();
            $t->integer('Connector_type')->unsigned();
            $t->integer('Connector_ID')->unsigned();
            $t->integer('Connection_type')->unsigned();
            $t->integer('Connection_ID')->unsigned();

            $t->foreign('Connector_type')->references('ID')->on('types');
            $t->foreign('Connection_type')->references('ID')->on('types');
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
        Schema::dropIfExists('connections');
    }
}
