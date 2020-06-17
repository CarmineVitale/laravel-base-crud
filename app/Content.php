<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //Fillables permettono scfrittura o modifica
    public $fillable = [
        'nome',
        'cognome',
        'ruolo',
        'caratteristiche'
    ];
}
