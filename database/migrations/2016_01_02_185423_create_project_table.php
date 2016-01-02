<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('project', function($t)
        {
            $t->increments('ID')->unsigned();
            $t->integer('Projects_ID')->unsigned();
            $t->integer('Member_ID')->unsigned();
            $t->integer('Member_type')->unsigned();

            $t->foreign('Projects_ID')->references('ID')->on('projects');
            $t->foreign('Member_type')->references('ID')->on('types');
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
        Schema::dropIfExists('project');
    }
}
