<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('projects', function($t)
        {
            $t->increments('ID')->unsigned();
            $t->integer('Creator_ID')->unsigned();
            $t->integer('Creator_type')->unsigned();
            $t->string('Name', 100);
            $t->text('Desc_long')->nullable();
            $t->string('Desc_small', 255)->nullable();
            $t->dateTime('Start_date')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable(); //Werkt dit?
            $t->dateTime('End_date')->nullable();

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
        Schema::dropIfExists('company');
    }
}
