<?php

namespace App\Http\Controllers;
use App\Revue;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Http\Requests;
use Validator;

class RevueController extends Controller
{
    public function liste(){
        
        //On sélectionne tous les articles
        //paginate(10): pour afficher 10 articles par pages
        $revues = Revue::orderBy('annee','DESC')->paginate(10);

        return view('Revue.liste',['revues'=>$revues]);
    }
    public function listet(Request $request){
        // Contraintes 
        $validator = Validator::make($request->all(),[
            'group1'=>'required',
        ]);
        //si l'une des contraintes n'est pas respectée, on redirige vers la page du formulaire et on retourne les erreurs
        if($validator->fails()){
            return redirect('/Revue')->withErrors($validator)->withInput();
        }
        //On affecte la valeur de l'année au champ 'annee'
        $annee=$request->input('group1');
        
        if($annee == 2016){
        $revues = Revue::where('annee','2016')->paginate(10);
        return view('Revue.liste',['revues'=>$revues]);
        }
        elseif($annee == 2015){
        $revues = Revue::where('annee','2015')->paginate(10);
        return view('Revue.liste',['revues'=>$revues]);
        }
        elseif($annee == 2014){
        $revues = Revue::where('annee','2014')->paginate(10);
        return view('Revue.liste',['revues'=>$revues]);
        }
        elseif($annee == 2013){
        $revues = Revue::where('annee','2013')->paginate(10);
        return view('Revue.liste',['revues'=>$revues]);
        }
        elseif($annee == 2012){
        $revues = Revue::where('annee','2012')->paginate(10);
        return view('Revue.liste',['revues'=>$revues]);
        }
        elseif($annee == 2011){
        $revues = Revue::where('annee','2011')->paginate(10);
        return view('Revue.liste',['revues'=>$revues]);
        }
        elseif($annee == 2010){
        $revues = Revue::where('annee','2010')->paginate(10);
        return view('Revue.liste',['revues'=>$revues]);
        }
    }
    
    
     
}
