<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('company', function($t)
        {
            $t->increments('ID')->unsigned();
            $t->integer('Company_ID')->unsigned();
            $t->integer('Accounts_ID')->unsigned();

            $t->foreign('Company_ID')->references('ID')->on('companies');
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
        Schema::dropIfExists('company');
    }
}
