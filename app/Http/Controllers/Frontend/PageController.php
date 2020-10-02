<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Banner;

class PageController extends Controller
{
    private $fd_token = '8e543d2e035642e38bc537b14c1026e2';

    public function index()
    {
        $banners = Banner::all();

        $standings = Http::withHeaders(['X-Auth-Token' => $this->fd_token])->get('http://api.football-data.org/v2/competitions/2021/standings');
        // dd($standings->json());

        // liverpool id 64
        $liverpool_matches = Http::withHeaders(['X-Auth-Token' => $this->fd_token])->get('http://api.football-data.org/v2/teams/64/matches/');
        $liverpool_matches = $liverpool_matches['matches'];

        $data = [
            'standings' => $standings,
            'banners' => $banners,
        ];

        return view('frontend.index', $data);
    }
}
