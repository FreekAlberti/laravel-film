<?php

use Illuminate\Database\Seeder;
use App\Film;
use App\Producer;
use Faker\Generator as Faker;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 25; $i++) {
            
            $producer = Producer::inRandomOrder()->first();

            $newFilm = new Film;
            $newFilm->title = $faker->text(30);
            $newFilm->original_title = $faker->text(50);
            $newFilm->producer_id = $producer->id;
            $newFilm->cover = $faker->imageUrl(200, 300);
            $newFilm->release = $faker->year();
            $newFilm->color = rand(0,1);
            $newFilm->running_time = $faker->numberBetween(40, 350);
            $newFilm->genre = $faker->text(50);
            $newFilm->plot = $faker->paragraph(6, true);
            $newFilm->save();
        }
    }
}
