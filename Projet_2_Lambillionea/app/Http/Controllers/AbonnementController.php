<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;

class AbonnementController extends Controller
{
    public function formulaireAbo(){
        return view('Abonnement.formulaireAbo');
    }
    public function formulairePost(Request $request){
        // Contraintes 
        $validator = Validator::make($request->all(),[
            'nom'=>'required|min:2|max:20',
 
        ]);
        //si l'une des contraintes n'est pas respectée, on redirige vers la page du formulaire et on retourne les erreurs
        if($validator->fails()){
            return redirect('/Abonnement')->withErrors($validator)->withInput();
        }
        
        

        Mail::send('Abonnement.formulaireAbo', $request->all(), function($message) 
        {
                $message->to('paquet.maxi@gmail.com')->subject("Demande d'abonnement");
        });
        return view("confirmation");

        
    }
}
