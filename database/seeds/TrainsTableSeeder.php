<?php

use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $train = new Train();
        $train->departure_station = 'milano';
        $train->arrival_station = 'carrara';
        $train->departure_time = 120000;
        $train->arrival_time = 190000;
        $train->code_train = 32000;
        $train->carriage_number = 12;
        $train->hours_delay = true;
        $train->deleted = false;

        $train->save();
    }
}
