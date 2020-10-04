<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubMatch extends Model
{
    use HasFactory;

    public function home_team()
    {
        return $this->hasOne('App\Models\Team', 'team_id', 'home_team_id');
    }

    public function away_team()
    {
        return $this->hasOne('App\Models\Team', 'team_id', 'away_team_id');
    }
}
