<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('round');
            $table->integer('number_match');
            $table->integer('won');
            $table->integer('lost');
            $table->integer('draw');
            $table->integer('goals_for');
            $table->integer('goals_against');
            $table->integer('goals_difference');
            $table->timestamps();
            $table->unsignedInteger('club_id');
            $table->foreign('club_id')->references('id')->on('clubs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ranks');
    }
}
