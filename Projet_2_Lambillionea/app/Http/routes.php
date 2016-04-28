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
    'uses'=>'RevueController@ajouter'
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


/*Page d'accueil de la partie admin*/
Route::get('/Administration/Accueil', [
    'as'=>'adminAccueil',
    'uses'=>'EvenementController@showLoginForm'
]);


Route::get('/add',[
    'as'=>'ajouterEvenement',
    'uses'=>'EvenementController@addEvenement'
]);

Route::post('/valid',[
    'as'=>'valid',
    'uses'=>'EvenementController@validEvenement'
]);

Route::get('/evenement/supprimer/{id}',[
    'as'=>'supprimerEvenement',
    'uses'=>'EvenementController@supprimerEvenement'
]);

Route::get('/evenement/modifier/{id}',[
    'as'=>'modifierEvenement',
    'uses'=>'EvenementController@modifierEvenement'
]);

Route::post('/update/{id}',[
    'as'=>'update',
    'uses'=>'EvenementController@updateEvenement'
]);


