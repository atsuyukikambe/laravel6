<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('subject');
            $table->date('date');
            $table->timestamp('started_at')->nullable();
            $table->timestamp('ended_at')->nullable();
            $table->unsignedInteger('start_page')->nullable();
            $table->unsignedInteger('end_page')->nullable();
            $table->integer('start_hour');
            $table->integer('start_minute');
            $table->integer('end_hour');
            $table->integer('start_minute');
            $table->text('content');
            $table->integer('page1')->nullable();
            $table->integer('page2')->nullable();
            $table->integer('page3')->nullable();
            $table->integer('page4')->nullable();
            $table->integer('page5')->nullable();
            $table->integer('page6')->nullable();
            $table->integer('page7')->nullable();
            $table->integer('page8')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
