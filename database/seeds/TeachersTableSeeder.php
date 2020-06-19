<?php

use Illuminate\Database\Seeder;
use App\Content;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            [
                'nome' => 'Paolo',
                'cognome' => 'Duzioni',
                'ruolo' => 'Insegnante mattina',
                'caratteristiche' => 'Front-end',
            ],
            [
                'nome' => 'Lorenzo',
                'cognome' => 'Balsano',
                'ruolo' => 'Insegnante pomeriggio',
                'caratteristiche' => 'Back-end',
            ],
            [
                'nome' => 'Michele',
                'cognome' => 'Papagni',
                'ruolo' => 'Tutor',
                'caratteristiche' => 'Full-Stack',
            ]

        ];

        foreach ($teachers as $teacher) {
            $newTeacher = new Content();

            $newTeacher->fill($teacher);
            $newTeacher->save();
        }
    }
}
