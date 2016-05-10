<?php

namespace App;
use App\Revue;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $table = 'panier';

    protected $fillable = [
        'id','revueID'
    ];
    
    public $timestamps = false;
}
