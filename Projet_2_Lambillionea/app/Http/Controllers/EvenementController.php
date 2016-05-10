<?php

namespace App\Http\Controllers;
use App\Evenement;
use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;

class EvenementController extends Controller
{
    public function agenda(){

        $evenements = Evenement::orderBy('date','DESC')->get();

        return view('Evenement.agenda',['evenements'=>$evenements]);
    }
    public function adminAccueil(){
        $evenements = Evenement::orderBy('date','DESC')->get();
        return view('Evenement.adminAccueil',['evenements'=>$evenements]);
    }
    
     public function addEvenement(){
        return view('Evenement.formulaireAjout');
    }
    
    public function validEvenement(Request $request){
      // Contraintes 
        $validator = Validator::make($request->all(),[
            'titre'=>'required',
 
        ]);
        //si l'une des contraintes n'est pas respectée, on redirige vers la page du formulaire et on retourne les erreurs
        if($validator->fails()){
            return redirect('/add')->withErrors($validator)->withInput();
        }
        
        // Sinon on fait l'insert
        $parameters = $request->except(['_token']);
        
        // On appelle le modele
        Evenement::create($parameters);
        
        // On redirige vers la page d'accueil et on envoie un message flash de confirmation
        return redirect()->route('adminAccueil')->with(['status'=>'Evenement enregistré !']);
    }
    
    public function supprimerEvenement($id){

        $evenement = Evenement::find($id);
        if($evenement == null){
            
        }else{
            $evenement->delete();
        }
        
       return redirect()->route('adminAccueil');
    }
    
    public function modifierEvenement($id){
        $evenement = Evenement::find($id);
 
        return view('Evenement.formulaireEdit', ['evenement'=>$evenement]);
    }
    
    public function updateEvenement(Request $request, $id)
    {
        $evenement = Evenement::findOrFail($id);

        $this->validate($request, [
            'titre' => 'required',
        ]);

        $input = $request->all();

        $evenement->fill($input)->save();
        
        return redirect()->route('adminAccueil');
    }
}
