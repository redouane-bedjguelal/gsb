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

Route::get('/saisieEmploye', function () {
    return view('formEmploye');
});

Route::get('/pageEmploye', function () {
    return view('pageEmploye');
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