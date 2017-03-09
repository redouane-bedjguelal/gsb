<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;

use App\metier\Employe;

class EmployeController extends Controller
{
    public function postAfficherEmploye()
    {
    // On récupère les informations saisies
    $civilite = Request::input("civil");
    $prenom = Request::input("prenom");
    $nom = Request::input("nom");
    $pwd = Request::input("password");
    $profil = Request::input("profil");
    $interet = Request::input("interet");
    $message = Request::input("le-message");
    
    // On crée un objet
    $unEmploye = new Employe($civilite,$nom,$prenom,$pwd,$profil,$interet,$message);
    
    return view('/pageEmploye')->with('unEmp',$unEmploye);
    }
}
