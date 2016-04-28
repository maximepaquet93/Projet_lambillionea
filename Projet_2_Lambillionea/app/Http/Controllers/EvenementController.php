<?php

namespace App\Http\Controllers;
use App\Evenement;
use Illuminate\Http\Request;

use App\Http\Requests;

class EvenementController extends Controller
{
    public function agenda(){
        $evenement = Evenement::all();
        return view('Evenement.agenda',['evenement'=>$evenement]);
    }
    public function adminAccueil(){
        return view('Evenement.adminAccueil');
    }
}
