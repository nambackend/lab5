<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('movies')->insert([
                'title' => $faker->text(25),
                'poster' => 'https://icdn.24h.com.vn/upload/2-2024/images/2024-06-29/dT-duc-lo-kich-ban-bi-dan-Mach-cam-chan-hiem-hoa-cham-luan-luu-o-EURO-Clip-1-phut-Bong-da-24H-449263113_457399657018671_2218226989595565566_n--2-1719615531-720-width740height629.jpg',
                'intro' => $faker->text(50),
                'release_date' => $faker->date(),
                'genre_id' => rand(1, 4),
            ]);
        }
    }
}
