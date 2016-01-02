<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('companies', function($t)
        {
            $t->increments('ID')->unsigned();
            $t->string('Company_name', 100);
            $t->text('Company_desc')->nullable();
            $t->integer('Creator_ID')->unsigned();
            $t->boolean('Blocked')->default(false);
            $t->boolean('Disabled')->default(false);
            $t->boolean('Verified')->default(false);

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
        Schema::dropIfExists('companies');
    }
}
