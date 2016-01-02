<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('group', function($t)
        {
            $t->increments('ID')->unsigned();
            $t->integer('Group_ID')->unsigned();
            $t->integer('Accounts_ID')->unsigned();

            $t->foreign('Group_ID')->references('ID')->on('groups');
            $t->foreign('Accounts_ID')->references('ID')->on('accounts');
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
        Schema::dropIfExists('group');
    }
}
