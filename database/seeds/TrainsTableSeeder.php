<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0 ; $i < 50 ; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->words(2, true);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_date = $faker->dateTimeThisMonth();
            $newTrain->departure_time= $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->randomNumber(4, true);
            $newTrain->carriages_number = $faker->numberBetween(0, 18);
            $newTrain->is_in_time = $faker->boolean();
            $newTrain->is_deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}
