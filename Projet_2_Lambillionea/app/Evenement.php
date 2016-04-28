<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $table = 'evenements';
    
    protected $fillable = [
        'titre','texte', 'date', 'contact', 'rue', 'numero', 'localite', 'codePostal'
    ];
    public $timestamps = false;
}
