<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tags', function($t)
        {
            $t->increments('ID')->unsigned();
            $t->string('Name', 20);
            $t->integer('Creator_type')->unsigned();
            $t->integer('Creator_ID')->unsigned();
            $t->integer('Reference_type')->unsigned();
            $t->integer('Reference_ID')->unsigned();

            $t->foreign('Reference_type')->references('ID')->on('types');
            $t->foreign('Creator_type')->references('ID')->on('types');
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
        Schema::dropIfExists('tags');
    }
}
