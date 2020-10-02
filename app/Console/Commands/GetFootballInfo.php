<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\LeagueConfigs;
use App\Models\Team;

class GetFootballInfo extends Command
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

        $standings = Http::withHeaders(['X-Auth-Token' => env('FOOTBALL_ORG_TOKEN')])->get('http://api.football-data.org/v2/competitions/'.$competition.'/standings');
        
        // update current matchday
        $matchday = $standings['season']['currentMatchday'];        
        $league_config = LeagueConfigs::updateOrCreate(['config_name' => 'matchday'], ['config_value' => $matchday]);
        
        // dd($standings->json());

        // liverpool id 64
        // $liverpool_matches = Http::withHeaders(['X-Auth-Token' => env('FOOTBALL_ORG_TOKEN')])->get('http://api.football-data.org/v2/teams/64/matches/');
        // $liverpool_matches = $liverpool_matches['matches'];

    }
}
