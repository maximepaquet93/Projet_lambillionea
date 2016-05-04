<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    
    public function ajouter(){
        return view('Article.ajouter');
    }
}
