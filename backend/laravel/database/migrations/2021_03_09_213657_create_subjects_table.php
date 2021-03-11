<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Japanese');
            $table->string('English');
            $table->string('Math');
            $table->string('Biology');
            $table->string('Chemistry');
            $table->string('Physics');
            $table->string('Japanese-history');
            $table->string('World-history');
            $table->string('Geography');
            $table->string('Politics-and-economy');
            $table->string('Ethics');
            $table->string('others');
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
        Schema::dropIfExists('subjects');
    }
}
