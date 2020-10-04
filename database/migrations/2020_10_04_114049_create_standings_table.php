<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standings', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('position');
            $table->smallInteger('team_id');
            $table->smallInteger('played_games');
            $table->string('form');
            $table->smallInteger('won');
            $table->smallInteger('draw');
            $table->smallInteger('lost');
            $table->smallInteger('points');
            $table->smallInteger('goals_for');
            $table->smallInteger('goals_against');
            $table->smallInteger('goal_difference');
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
        Schema::dropIfExists('standings');
    }
}
