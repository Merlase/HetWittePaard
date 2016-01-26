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
        Schema::table('companies', function(Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->string('addressline');
            $table->string('addressline_1');
            $table->string('city');
            $table->string('country');

            $table->string('coc_number');
            $table->string('vat_number');

            $table->softDeletes();
            $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('companies');
    }
}
