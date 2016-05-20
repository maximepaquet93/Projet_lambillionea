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
            'nom'=>'required|min:2|max:40',

 
        ]);
        //si l'une des contraintes n'est pas respectÃ©e, on redirige vers la page du formulaire et on retourne les erreurs
        if($validator->fails()){
            return redirect('/Abonnement')->withErrors($validator)->withInput();
        }
        
        $nom=$request->input('nom');
        $prenom=$request->input('prenom');
        $email=$request->input('email');
        $localite=$request->input('localite');
        $rueNum=$request->input('rueNum');
        $codePostale=$request->input('codePostale');

        /**
         * La demande d'abonnement se fait via un envoi de mail
         * 
         */
        Mail::send('Email.emailAbo',['nom'=>$nom, 'prenom'=>$prenom, 'email'=>$email, 'localite'=>$localite, 'rueNum'=>$rueNum, 'codePostale'=>$codePostale] , function($message) 
        {
                $message->to('paquet.maxi@gmail.com')->subject("Demande d'abonnement");
        });
        return view("Abonnement.confirmation");

        
    }
}
