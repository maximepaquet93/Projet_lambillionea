<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Pagination\Paginator;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;

use Mail;

/**
 * Controleur d'un article
 *
 */
class ArticleController extends Controller
{
    /**
     * Methode qui va permettre d'afficher la vue pour ajouter un article ( Demande d'auteur)
     * @return view
     */
    public function ajouter(){
        return view('Article.ajouter');
    }
    
    public function search(Request $request){
        
        $q = $request->input('search');

        $searchTerms = explode(' ', $q);

        foreach($searchTerms as $term)
        {
            $results = Article::where('TITRE', 'LIKE', '%'. $term .'%')->paginate(5);
            $results= TAG::where('TITRE', 'LIKE', '%'. $term .'%')->paginate(5);
        }
        
        
            return view('Revue.liste',['results'=>$results]);
        
    }
    public function envoieArticle(Request $req){       
       // Contraintes 
        $validator = Validator::make($req->all(),[

        ]);
        //si l'une des contraintes n'est pas respectÃ©e, on redirige vers la page du formulaire et on retourne les erreurs
        if($validator->fails()){
            return redirect('/Ajout-article')->withErrors($validator)->withInput();
        }
        
        $sujet=$req->input('sujet');
        $nomAuteur=$req->input('nomAuteur');
        $fichier=$req->input('fichier');


        /**
         * La demande d'abonnement se fait via un envoi de mail
         * 
         */
        Mail::send('Email.emailArt',['sujet'=>$sujet, 'fichier'=>$fichier, 'nomAuteur'=>$nomAuteur ] , function($message) 
        {
                $message->to('paquet.maxi@gmail.com')->subject("Publication d'un article");
        });
        return view("Article.confirmation");

    }
}
