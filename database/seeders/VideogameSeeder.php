<?php

namespace Database\Seeders;

use App\Models\Videogame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class VideogameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 8; $i++) {
            $new_game = new Videogame();
            $new_game->title = $faker->realText(50);
            $new_game->image = $faker->imageUrl();
            $new_game->price = $faker->randomFloat(2, 1, 999);
            $new_game->release_date = $faker->dateTimeBetween('-30 years', '+3 years');
            $new_game->developer = $faker->company();
            $new_game->publisher = $faker->realText(50);
            $new_game->save();
        }
    }
}
