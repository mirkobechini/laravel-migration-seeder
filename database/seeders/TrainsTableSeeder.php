<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for($i = 0; $i < 20; $i++){

            $newTrain = new Train();
            
            $newTrain->company = $faker->company();
            $newTrain->start_station = $faker->city();
            $newTrain->arrive_station = $faker->city();
            $newTrain->start_dateTime = $faker->dateTimeThisYear();
            $newTrain->arrive_dateTime = $faker->dateTimeThisYear();
            $newTrain->train_code = "FR" . $faker->randomNumber(4, false);
            $newTrain->carriages_number = $faker->randomNumber(2, false);
            $newTrain->onTime = $faker->numberBetween(0, 1);
            $newTrain->deleted = $faker->numberBetween(0, 1);
            
            $newTrain->save();
        }
    }
}
