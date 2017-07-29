<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('messages',function (Blueprint $table){
           $table->increments('id');
           $table->unsignedInteger('sender');
           $table->unsignedInteger('receiver');
           $table->string('chats_id');
           $table->foreign('sender')->references('id')->on('users');
           $table->foreign('receiver')->references('id')->on('users');
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
        Schema::dropIfExists('messages');
    }
}
