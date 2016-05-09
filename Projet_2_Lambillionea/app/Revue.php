<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revue extends Model
{
    protected $table = 'revues';

    protected $fillable =[
        'tome', 'annee', 'fascicule',
    ];

    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }
}
