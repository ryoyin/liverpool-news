<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use DB;

use App\Models\LeagueConfigs;
use App\Models\Team;
use App\Models\Standing;
use App\Models\ClubMatch;

class GetFootballData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'football:getData';

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

        echo "Retrieve standings data from football-data.org\n";
        $standings = Http::withHeaders(['X-Auth-Token' => env('FOOTBALL_ORG_TOKEN')])->get('http://api.football-data.org/v2/competitions/'.$competition.'/standings');
        
        // update current matchday
        $matchday = $standings['season']['currentMatchday'];        
        $league_config = LeagueConfigs::updateOrCreate(['config_name' => 'matchday'], ['config_value' => $matchday]);
        
        // dd($standings->json());

        $standings = $standings['standings'][0]['table'];

        Standing::query()->truncate();

        foreach($standings as $standing) {
            $new_standing = New Standing;

            $new_standing->position = $standing['position'];
            $new_standing->team_id = $standing['team']['id'];
            $new_standing->played_games = $standing['playedGames'];
            $new_standing->form = $standing['form'];
            $new_standing->won = $standing['won'];
            $new_standing->draw = $standing['draw'];
            $new_standing->lost = $standing['lost'];
            $new_standing->points = $standing['points'];
            $new_standing->goals_for = $standing['goalsFor'];
            $new_standing->goals_against = $standing['goalsAgainst'];
            $new_standing->goal_difference = $standing['goalDifference'];

            $new_standing->save();
        }

        echo "Retrieve Liverpool matches data from football-data.org\n";
        // liverpool id 64
        $liverpool_matches = Http::withHeaders(['X-Auth-Token' => env('FOOTBALL_ORG_TOKEN')])->get('http://api.football-data.org/v2/teams/64/matches/');
        $liverpool_matches = $liverpool_matches['matches'];

        // dd($liverpool_matches);

        ClubMatch::query()->truncate();

        foreach($liverpool_matches as $liverpool_match) {
            $new_match = New ClubMatch;

            $match_datetime = new Carbon($liverpool_match['utcDate']);
            
            $this->checkTeam($liverpool_match['homeTeam']['id']);
            $this->checkTeam($liverpool_match['awayTeam']['id']);

            $new_match->status          = $liverpool_match['status'];
            $new_match->matchday        = $liverpool_match['matchday'];
            $new_match->datetime        = $match_datetime->toDateTimeString();
            $new_match->winner          = $liverpool_match['score']['winner'];
            $new_match->home_team_score = $liverpool_match['score']['fullTime']['homeTeam'];
            $new_match->away_team_score = $liverpool_match['score']['fullTime']['awayTeam'];
            $new_match->home_team_id    = $liverpool_match['homeTeam']['id'];
            $new_match->away_team_id    = $liverpool_match['awayTeam']['id'];

            $new_match->save();
        }

        // get team squard
        // $team = Http::withHeaders(['X-Auth-Token' => env('FOOTBALL_ORG_TOKEN')])->get('http://api.football-data.org/v2/teams/64');
        // dd($team->json());
        // "id" => 11777
        // "name" => "Harry Wilson"
        // "position" => "Midfielder"
        // "dateOfBirth" => "1997-03-22T00:00:00Z"
        // "countryOfBirth" => "Wales"
        // "nationality" => "Wales"
        // "shirtNumber" => null
        // "role" => "PLAYER"
        // exit;

    }

    public function checkTeam($team_id)
    {
        $team = Team::where('team_id', $team_id)->first();
        if($team == '') {
            $team = Http::withHeaders(['X-Auth-Token' => env('FOOTBALL_ORG_TOKEN')])->get('http://api.football-data.org/v2/teams/'.$team_id);

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
    }
}
