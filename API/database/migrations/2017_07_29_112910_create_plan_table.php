<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('plan',function (Blueprint $table){
           $table->increments('id');
           $table->string('documents');
           $table->unsignedInteger('unit_id');
           $table->unsignedInteger('chat_id');
           $table->integer('approved_status');
           $table->foreign('unit_id')->references('id')->on('units');
           $table->foreign('chat_id')->references('chat_id')->on('chat');
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
        Schema::dropIfExists('plan');
    }
}
