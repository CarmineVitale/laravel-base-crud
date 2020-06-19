<?php

use Illuminate\Database\Seeder;
use App\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $people = [
            [
                'name' =>'Carmine Vitale',
                'address' =>'Via Roma, 88',
                'phone' => 1000
            ],
            [
                'name' =>'Andrea Rossi',
                'address' =>'Via Torino, 22',
                'phone' => 1001
            ],
            [
                'name' =>'Antonio Verdi',
                'address' =>'Via Milano, 11',
                'phone' => 999
            ],
            [
                'name' =>'Giorgio Bianchi',
                'address' =>'Via Verdi, 10',
                'phone' => 112
            ]
        ]; 
        foreach ($people as $person) {
            $newPerson = new Person();

            $newPerson->fill($person);
            //Il metodo fill fa questo dietro le quinte
            // $newPerson->name = $person['name'];
            // $newPerson->address = $person['address'];
            // $newPerson->phone = $person['phone'];


            $newPerson->save();

        }
    }
}
