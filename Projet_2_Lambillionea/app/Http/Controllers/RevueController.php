<?php

namespace App\Http\Controllers;

use App\Revue;

use Illuminate\Http\Request;

use App\Http\Requests;

class RevueController extends Controller
{
    public function liste(){
        return view('Revue.liste');
    }
    public function ajouter(){
        return view('Article.ajouter');
    }
}
