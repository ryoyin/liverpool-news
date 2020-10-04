<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Banner;
use App\Models\Team;
use App\Models\LeagueConfigs;
use App\Models\Standing;
use App\Models\ClubMatch;

class PageController extends Controller
{   

    public function index()
    {
        $team = Http::withHeaders(['X-Auth-Token' => env('FOOTBALL_ORG_TOKEN')])->get('http://api.football-data.org/v2/teams/64');
        dd($team->json());
        exit;

        $banners = Banner::all();

        $leagueConfig = LeagueConfigs::where('config_name', 'matchday')->first();
        $matchday = $leagueConfig->config_value;

        $standings = Standing::all();

        $standings = Standing::all();

        $currentMatch = ClubMatch::where('matchday', $matchday)->first();

        $clubMatches = ClubMatch::where('status', 'SCHEDULED')->get();
        
        $data = [
            'banners'   => $banners,
            'matchday' => $matchday,
            'standings' => $standings,
            'currentMatch' => $currentMatch,
            'clubMatches' => $clubMatches
        ];

        return view('frontend.index', $data);
    }

}
