<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*Page d'accueil*/
Route::get('/', [
    'as'=>'accueil',
    'uses'=>'Controller@accueil'
]);

/*Les revues*/
Route::get('/Revue', [
    'as'=>'laRevue',
    'uses'=>'RevueController@liste'
]);

/*Publier un article*/
Route::get('/Ajout-article', [
    'as'=>'ajoutArticle',
    'uses'=>'ArticleController@ajouter'
]);

/*Les événements*/
Route::get('/Evenement', [
    'as'=>'lesEvenements',
    'uses'=>'EvenementController@agenda'
]);

/*le panier*/
Route::get('/Mon-panier', [
    'as'=>'monPanier',
    'uses'=>'PanierController@listeRevues'
]);

//==============================================================
//============Partie administration=============================
//==============================================================
/*page de connexion*/
Route::get('/Administration', [
    'as'=>'adminLogin',
    'uses'=>'Auth\AuthController@getLogin'
]);
/*Check de login*/
Route::post('/Administration', [
    'as'=>'adminloginCheck',
    'uses'=>'Auth\AuthController@postLogin'
]);
/*Déconnexion*/
Route::get('/Administration/Déconnexion', [
    'as'=>'adminLogout',
    'uses'=>'Auth\AuthController@getLogout'
]);

/*Page d'accueil de la partie admin*/
Route::get('/Administration/Accueil', [
    'as'=>'adminAccueil',
    'uses'=>'EvenementController@adminAccueil'
]);

/*Ajout d'un evenement*/
Route::get('/add',[
    'as'=>'ajouterEvenement',
    'uses'=>'EvenementController@addEvenement'
]);

/*validation de l'ajout d'un evenement*/
Route::post('/valid',[
    'as'=>'valid',
    'uses'=>'EvenementController@validEvenement'
]);

/*Supprimer un evenement*/
Route::get('/evenement/supprimer/{id}',[
    'as'=>'supprimerEvenement',
    'uses'=>'EvenementController@supprimerEvenement'
]);

/*Modifier un evenement, afficher le formulaire*/
Route::get('/evenement/modifier/{id}',[
    'as'=>'modifierEvenement',
    'uses'=>'EvenementController@modifierEvenement'
]);

/*Modifier un evenement, envoie des données*/
Route::post('/update/{id}',[
    'as'=>'update',
    'uses'=>'EvenementController@updateEvenement'
]);


