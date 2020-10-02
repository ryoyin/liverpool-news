<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeagueConfigs extends Model
{
    use HasFactory;

    protected $fillable = ['config_name', 'config_value'];
}
