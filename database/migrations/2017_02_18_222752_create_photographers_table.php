<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotographersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographers', function (Blueprint $table) {
            
            $table->increments('id_photographer');
            
            $table->string('name_photographer');
            $table->string('mail_photographer');
            $table->string('pass_photographer');
            $table->string('phone_photographer');
            $table->string('favicon_photographer');
            $table->timestamps('created_at_photographer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('photographers');
    }
}
