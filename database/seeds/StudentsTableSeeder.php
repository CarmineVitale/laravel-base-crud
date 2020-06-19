<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 5; $i++) {
            $newStudent = new Student();

            $newStudent->name = $faker->firstName();
            $newStudent->surname = $faker->lastName();
            $newStudent->matricola = $faker->ean8();
            $newStudent->description = $faker->sentence(6, true);
            
            $newStudent->save();
        }
    }
}
