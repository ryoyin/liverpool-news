<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LeagueConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('league_configs')->insert([
            'config_name' => 'league_name',
            'config_value' => 'Premier League'
        ]);
    }
}
