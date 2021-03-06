<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Team;
use App\Models\Player;

class FootballInitial extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'football:initial';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $competition = env('FOOTBALL_ORG_TEAM');
        
        // /v2/competitions/{id}/teams
        $teams = Http::withHeaders(['X-Auth-Token' => env('FOOTBALL_ORG_TOKEN')])->get('http://api.football-data.org/v2/competitions/'.$competition.'/teams');
        $teams = $teams['teams'];

        Team::query()->truncate();

        foreach($teams as $team) {

            $newTeam = New Team;
            $newTeam->team_id = $team['id'];
            $newTeam->name = $team['name'];
            $newTeam->short_name = $team['shortName'];
            $newTeam->crest_url = $team['crestUrl'];
            $newTeam->address = $team['address'];
            $newTeam->telephone_number = $team['phone'];
            $newTeam->website_url = $team['website'];
            $newTeam->email = $team['email'];
            $newTeam->founded = $team['founded'];
            $newTeam->club_color = $team['clubColors'];
            $newTeam->venue = $team['venue'];
            $newTeam->save();
        }

        // get team squad
        $team = Http::withHeaders(['X-Auth-Token' => env('FOOTBALL_ORG_TOKEN')])->get('http://api.football-data.org/v2/teams/64');
        $squad = $team['squad'];

        Player::query()->truncate();

        foreach($squad as $player) {
            var_dump($player);
            $new_player = New Player;
            $new_player->name = $player['name'];
            $new_player->position = $player['position'];
            $new_player->number = $player['shirtNumber'];
            $new_player->save();
        }

    }
}
