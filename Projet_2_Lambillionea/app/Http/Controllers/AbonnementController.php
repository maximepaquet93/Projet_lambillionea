<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;

/**
 * Controleur d'un abonnement
 *
 */
class AbonnementController extends Controller
{
    /**
     * Methode qui va afficher la vue contenant le formulaire pour s'abonner
     * @return view
     */
    public function formulaireAbo(){
        return view('Abonnement.formulaireAbo');
    }
    /**
     * Methode permettant de valider le formulaire d'abonnement et donc d'envoyer un mail
     * @param $request Request
     * @return view
     */
    public function formulairePost(Request $request){
        // Contraintes 
        $validator = Validator::make($request->all(),[
            'nom'=>'required|min:2|max:20',
 
        ]);
        //si l'une des contraintes n'est pas respectée, on redirige vers la page du formulaire et on retourne les erreurs
        if($validator->fails()){
            return redirect('/Abonnement')->withErrors($validator)->withInput();
        }


        /**
         * La demande d'abonnement se fait via un envoi de mail
         * 
         */
        Mail::send('Abonnement.formulaireAbo', $request->all(), function($message) 
        {
                $message->to('paquet.maxi@gmail.com')->subject("Demande d'abonnement");
        });
        return view("confirmation");

        
    }
}
