<?php

use Illuminate\Database\Seeder;
use App\Producer;
use Faker\Generator as Faker;

class ProducersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newProducer = new Producer;
            $newProducer->name = $faker->firstName;
            $newProducer->lastname = $faker->lastName;
            if(rand(0,1) == 1) {
                $newProducer->date_of_birth = $faker->date('Y-m-d', 'now');
            }
            if(rand(0,2) == 1) {
                $newProducer->biography = $faker->paragraph(4, true);
            }
            $newProducer->save();
        }
    }
}
