<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('comments', function($t)
        {
            $t->increments('ID')->unsigned();
            $t->integer('Poster_type')->unsigned();
            $t->integer('Poster_ID')->unsigned();
            $t->integer('Location_type')->unsigned();
            $t->integer('Location_ID')->unsigned();
            $t->text('Comment');
            $t->integer('Reaction')->unsigned();
            $t->boolean('Disabled')->default(false);

            $t->foreign('Poster_type')->references('ID')->on('types');
            $t->foreign('Location_type')->references('ID')->on('types');
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
        Schema::dropIfExists('comments');
    }
}
