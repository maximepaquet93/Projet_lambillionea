<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Pagination\Paginator;

use Illuminate\Http\Request;

use App\Http\Requests;

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
}
