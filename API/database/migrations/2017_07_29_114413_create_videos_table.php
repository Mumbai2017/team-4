<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('videos',function (Blueprint $table){
            $table->increments('id');
            $table->string('video_url');
            $table->unsignedInteger('plan_id');
            $table->unsignedInteger('chat_id');
            $table->integer('approved_status');
            $table->foreign('plan_id')->references('id')->on('plan');
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
        Schema::dropIfExists('videos');
    }
}
