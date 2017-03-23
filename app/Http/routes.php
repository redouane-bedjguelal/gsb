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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::post('/postEmploye', 'EmployeController@postAfficherEmploye');

// index
Route::get('/', function() {
    return view('index');
});
// connexion
Route::get('/connexion', function() {
    return view('signIn');
});
// Connexion
Route::post('/SignIn', 'VisiteurController@signIn');

// Deconnexion
Route::get('/deconnexion', 'VisiteurController@signOut');

// Liste des invitations
Route::get('/lister', 'InvitationController@getInvitations');

// Ajouter une invitation
Route::get('/ajouter', 'InvitationController@addInvitation');

// Valider l'ajout d'une invitation
Route::post('/addInvite', 'InvitationController@ajouterInvitation');

// Modifier une invitation
Route::get('/modifierInvit/{activite}/{praticien}', ['uses' => 'InvitationController@editInvitation']);

// Valider une modification
Route::post('/editInvite', 'InvitationController@modifierInvitation');

// Supprimer une invitation
Route::get('deleteInvite/{idAct}/{idPrat}', ['uses' => 'InvitationController@supprimerInvitation']);