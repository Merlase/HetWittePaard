<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('accounts', function($t)
        {
            $t->increments('ID')->unsigned();
            $t->string('First_name', 50);
            $t->string('Middle_name', 100)->nullable();
            $t->string('Last_name', 50);
            $t->string('Email', 100);
            $t->string('Phone_number', 20)->nullable();
            $t->string('Address', 50)->nullable();
            $t->string('City', 50)->nullable();
            $t->string('Country', 50)->nullable();
            $t->string('Confirmation_token', 128)->nullable();
            $t->rememberToken();
            $t->integer('Role')->unsigned();
            $t->boolean('Blocked')->default(false);
            $t->boolean('Disabled')->default(false);
            $t->timestamps();

            $t->foreign('Role')->references('ID')->on('roles');
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
        Schema::dropIfExists('accounts');
    }
}
