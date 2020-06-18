<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //Fillables permettono scfrittura o modifica

    //Se gestisco in ContentController (in STORE) non c'è bisogno di creare questa proprietà
    public $fillable = [
        'nome',
        'cognome',
        'ruolo',
        'caratteristiche'
    ];
}
