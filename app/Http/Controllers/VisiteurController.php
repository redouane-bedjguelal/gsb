<?php

namespace App\Http\Controllers;

use Request;
use App\metier\Visiteur;

class VisiteurController extends Controller {

    public function getLogin() {
        $erreur = "";
        return view('formLogin', compact('erreur'));
    }

    public function signIn() {
        // Récupération des informations de connexion
        $login = Request::input('login');
        $pwd = Request::input('pwd');
        $unVisiteur = new Visiteur();
        $connected = $unVisiteur->login($login, $pwd);
        // Tentative de connexion
        if ($connected) {
            return view('home');
        } else {
            $erreur = "Login ou mot de passe inconnu !";
            return view('formLogin', compact('erreur'));
        }
    }

    public function signOut() { //Déconnexion
        $unVisiteur = new Visiteur();
        $unVisiteur->logout();
        return view('home');
    }

}
