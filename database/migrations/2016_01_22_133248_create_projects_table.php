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
        Schema::table('projects', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('created_by_user_id')->unsigned();
            $table->foreign('created_by_user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->string('name');
            $table->text('description');

            $table->timestamp('starts_at');
            $table->timestamp('ends_at');
            $table->softDeletes();
            $table->timestamps():
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
    }
}
