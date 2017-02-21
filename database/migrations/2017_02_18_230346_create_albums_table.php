<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            
            $table->increments('id_album');
            
            $table->integer('id_photographer')->unsigned();
            $table->foreign('id_photographer')->references('id_photographer')->on('photographers');
            
            $table->string('name_album');
            $table->date('date_album');
            $table->timestamps('created_at_album');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('albums');
    }
}
