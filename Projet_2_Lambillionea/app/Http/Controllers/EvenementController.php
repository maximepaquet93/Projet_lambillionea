<?php

namespace App\Http\Controllers;
use App\Evenement;
use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;

/**
 * Controleur d'événement
 *
 */
class EvenementController extends Controller
{
    /**
     * Methode qui va afficher l'agenda c'est à dire la listes des différentes événements
     * La liste des événement est affichée par ordre décroissant des dates
     * @return view
     */
    public function agenda(){

        $evenements = Evenement::orderBy('date','DESC')->get();

        return view('Evenement.agenda',['evenements'=>$evenements]);
    }

    /**
     * Methode qui va afficher l'agenda pour l'admin : CRUD des événements
     * Les événements sont affcihés par ordre décroissant des dates
     * @return view
     */
    public function adminAccueil(){
        $evenements = Evenement::orderBy('date','DESC')->get();
        return view('Evenement.adminAccueil',['evenements'=>$evenements]);
    }

    /**
     * Methode qui va afficher la vue contenant le formulaire permettant d'ajouter un événement
     * Vue disponible uniquement par l'administrateur connecté
     * @return view
     */
     public function addEvenement(){
        return view('Evenement.formulaireAjout');
    }

    /**
     * Methode qui valide le formulaire d'ajout d'un événement
     * @param $request Request
     * @return redirection de route
     */
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

    /**
     * Methode qui supprime un événement sur base de son id : méthode dispo uniquement pour l'admin
     * @param $id integer
     * @return redirection de route
     */
    public function supprimerEvenement($id){

        $evenement = Evenement::find($id);
        if($evenement == null){
            
        }else{
            $evenement->delete();
        }
        
       return redirect()->route('adminAccueil');
    }

    /**
     * Methode qui permet d'afficher le formulaire pour modifier un événement sur base de son id : méthode dispo uniquement pour l'admin
     * @param $id integer
     * @return view
     */
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
