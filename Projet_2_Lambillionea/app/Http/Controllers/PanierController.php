<?php

namespace App\Http\Controllers;

use App\Panier;
use App\Revue;
use Illuminate\Http\Request;

use App\Http\Requests;

class PanierController extends Controller
{
    public function listeRevues(){
        $panier = Panier::orderBy('id', 'DESC')->get();
        $revues = Revue::orderBy('id','DESC')->get();
        $nbreRevues = $panier->count();
        return view('Panier.listeRevues', ['panier'=> $panier, 'revues'=>$revues, 'nbreRevues'=>$nbreRevues]);
    }

    public function addRevue($id){
        Panier::insert(['revue_id' => $id]);
        return redirect()->route('monPanier');
    }

    public function suppRevue($id){
        Panier::where('id','=',$id)->delete();
        return redirect()->route('monPanier');
    }
}
