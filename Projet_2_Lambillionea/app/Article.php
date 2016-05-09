<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    public function revues()
    {
        return $this->belongsToMany('App\Models\Revue');
    }
}
