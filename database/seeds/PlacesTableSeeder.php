<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Place;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newPlace = new Place();

            $newPlace->city = $faker->cityPrefix();
            $newPlace->country = $faker->state();
            $newPlace->latitude = $faker->latitude($min = -90, $max = 90);
            $newPlace->longitude = $faker->longitude($min = -180, $max = 180);
            
            $newPlace->save();
        }
    }
}
