<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('reports', function($t)
        {
            $t->increments('ID')->unsigned();
            $t->integer('Reporter_type')->unsigned();
            $t->integer('Reporter_ID')->unsigned();
            $t->integer('Comments_ID')->unsigned();
            $t->boolean('Completed')->default(false);

            $t->foreign('Reporter_type')->references('ID')->on('types');
            $t->foreign('Comments_ID')->references('ID')->on('comments');
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
        Schema::dropIfExists('reports');
    }
}
