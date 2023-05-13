<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTrains = [
            [
                'company_name' => 'Trenitalia',
                'station_departure' => 'Novara',
                'station_arrival' => 'Milano',
                'time_departure' => '2023-05-13',
                'time_arrival' => '2023-05-13',
                'is_in_time' => true,
            ],
            [
                'company_name' => 'Italo',
                'station_departure' => 'Trieste',
                'station_arrival' => 'Venezia',
                'time_departure' => '2023-05-10',
                'time_arrival' => '2023-05-11',
                'is_in_time' => false,
                'is_deleted' => false,
            ],


        ];

        foreach ($newTrains as $newTrain) {

            $train = new Train();

            $train->company_name = $newTrain['company_name'];
            $train->station_departure = $newTrain['station_departure'];
            $train->station_arrival = $newTrain['station_arrival'];
            $train->time_departure = $newTrain['time_departure'];
            $train->time_arrival = $newTrain['time_arrival'];
            $train->is_in_time = $newTrain['is_in_time'];

            $train->save();
        }
    }
}
