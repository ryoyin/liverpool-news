<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'image_path' => 'storage/resources/img/banner/banner1.png',
            'alt' => 'This is image alt',
            'caption' => 'Liverpool Senior Squard',
            'description' => ''
        ]);

        DB::table('banners')->insert([
            'image_path' => 'storage/resources/img/banner/banner2.png',
            'alt' => 'This is image alt.',
            'caption' => 'Our Legends.',
            'description' => ''
        ]);
    }
}
