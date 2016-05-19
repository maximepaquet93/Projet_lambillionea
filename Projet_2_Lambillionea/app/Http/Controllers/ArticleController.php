<?php

namespace App\Http\Controllers;

use App\Article;

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
}
