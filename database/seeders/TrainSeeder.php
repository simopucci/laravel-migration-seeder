<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $trains_data = [
        //     [
        //     "agency" => "My company",
        //     "departure_station" => "Taranto",
        //     "arrival_station" => "Bari",
        //     "departure_time" => "2024-03-21 10:30:00",
        //     "arrival_time" => "2024-03-21 11:30:00",
        //     "train_code" => "9876",
        //     "carriages_number" => 10
        //     ],
        //     [
        //         "agency" => "My company",
        //         "departure_station" => "Roma",
        //         "arrival_station" => "Napoli",
        //         "departure_time" => "2024-03-21 10:30:00",
        //         "arrival_time" => "2024-03-21 11:30:00",
        //         "train_code" => "1342",
        //         "carriages_number" => 10
        //     ],
        //     [
        //         "agency" => "My company",
        //         "departure_station" => "Novara",
        //         "arrival_station" => "Genova",
        //         "departure_time" => "2024-03-21 10:30:00",
        //         "arrival_time" => "2024-03-21 11:30:00",
        //         "train_code" => "45678",
        //         "carriages_number" => 8
        //     ],
        // ];

        // foreach ($trains_data as $train_data) {
        //     $train = new Train;
        //     $train->fill($train_data);
        // }   
        for ($i = 0; $i < 1000; $i++) {

            $train = new Train;
            $train->agency = $faker->company();
            $train->departure_station = $faker->address();
            $train->arrival_station = $faker->address();  
            $train->departure_time = $faker->date() . " " . $faker->time();   
            $train->arrival_time = $faker->date() . " " . $faker->time();

            $train_code = "";
            for( $y = 0; $y < 5; $y++ ) {
                $train_code .= $faker->randomLetter();
            }
            $train->train_code = $train_code;

            $train->carriages_number = $faker->numberBetween(4, 20);
            $train->save();
        }
    }
};