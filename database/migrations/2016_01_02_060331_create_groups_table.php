<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::make('groups', function($t)
        {
            $t->increments('ID')->unsigned();
            $t->integer('Creator_ID')->unsigned();
            $t->string('Name', 100);
            $t->boolean('Blocked')->default(false);
            $t->boolean('Disabled')->default(false);
            $t->timestamps();

            $t->foreign('Creator_ID')->references('ID')->on('accounts');
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
        Schema::dropIfExists('groups');
    }
}
