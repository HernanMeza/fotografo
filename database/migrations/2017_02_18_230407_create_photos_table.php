<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
                   
            $table->increments('id_photo');
            
            $table->integer('id_photographer')->unsigned();
            $table->foreign('id_photographer')->references('id_photographer')->on('photographers');
            $table->integer('id_album')->unsigned();
            $table->foreign('id_album')->references('id_album')->on('albums');

            $table->string('name_photo');
            $table->string('detail_photo');
            $table->timestamps('created_at_photo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('photos');
    }
}
