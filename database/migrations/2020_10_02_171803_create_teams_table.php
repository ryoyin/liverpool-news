<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            // "id" => 58
            $table->smallInteger('team_id');
            // "name" => "Aston Villa FC"
            $table->string('name');
            // "shortName" => "Aston Villa"
            $table->string('short_name')->nullable();
            // "tla" => "AST"
            // "crestUrl" => "https://crests.football-data.org/58.svg"
            $table->string('crest_url')->nullable();
            // "address" => "Villa Park Birmingham B6 6HE"
            $table->string('address')->nullable();
            // "phone" => "+44 (0121) 3272299"
            $table->string('telephone_number')->nullable();
            // "website" => "http://www.avfc.co.uk"
            $table->string('website_url')->nullable();
            // "email" => null
            $table->string('email')->nullable();
            // "founded" => 1872
            $table->smallInteger('founded')->nullable();
            // "clubColors" => "Claret / Sky Blue"
            $table->string('club_color')->nullable();
            // "venue" => "Villa Park"
            $table->string('venue')->nullable();
            // "lastUpdated" => "2020-10-01T01:58:21Z"
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
        Schema::dropIfExists('teams');
    }
}
