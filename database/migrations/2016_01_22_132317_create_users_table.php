<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->increments('id');
            $table->string('userable_type');
            $table->integer('userable_id');

            $table->string('email')->unique();
            $table->string('password', 64);
            $table->string('phone_number');

            $table->string('addressline');
            $table->string('addressline_1');
            $table->string('city');
            $table->string('country');

            $table->string('confirmation_token', 64);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
