<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PanierController extends Controller
{
    public function listeRevues(){
        return view('Panier.listeRevues');
    }
}
