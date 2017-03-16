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

// Index
Route::get('/', function() {
    return view('index');
});

// Connexion
Route::post('/SignIn', 'VisiteurController@signIn');

// Deconnexion
Route::get('/deconnexion', 'VisiteurController@signOut');
