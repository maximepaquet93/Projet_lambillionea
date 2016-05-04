<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RevueController extends Controller
{
    public function liste(){
        return view('Revue.liste');
    }
}
