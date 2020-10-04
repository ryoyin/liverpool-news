<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_matches', function (Blueprint $table) {
            $table->id();         
            
            $table->string('status');            
            $table->smallInteger('matchday');         
            $table->datetime('datetime');
            $table->string('winner')->nullable();            
            $table->smallInteger('home_team_score')->nullable();            
            $table->smallInteger('away_team_score')->nullable();            
            $table->smallInteger('home_team_id');            
            $table->smallInteger('away_team_id');
            
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
        Schema::dropIfExists('club_matches');
    }
}
