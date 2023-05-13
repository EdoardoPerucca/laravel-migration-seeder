<?php

namespace Database\Seeders;

use App\Models\Railway;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class RailwaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $newRailway = new Railway();

            $newRailway->name = $faker->city();

            $newRailway->save();
        }
    }
}
