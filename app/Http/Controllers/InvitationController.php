<?php

namespace App\Http\Controllers;

use Request;
use App\metier\Invitation;
use App\metier\Praticien;
use App\metier\Activite_compl;

class InvitationController extends Controller {

    public function getInvitations() {
        $uneInvitation = new Invitation();
        $lesInvitations = $uneInvitation->getInvitations();
        if (\Illuminate\Support\Facades\Session::get('id')!=0) {
            // On affiche la liste
            return view('listerInvitation', compact('lesInvitations'));
        } else {
            $erreur = "Vous devez vous connecter pour accéder à cette page";
            return view('signIn', compact('erreur'));
        }
    }

    public function getInvitationByPraticien($id) {
        $uneInvitation = new Invitation();
        $lesInvitations = $uneInvitation->getInvitationByPraticien($id);
        if (\Illuminate\Support\Facades\Session::get('id')!=0) {
            // On affiche la liste
            return view('listerInvitation', compact('lesInvitations'));
        } else {
            $erreur = "Vous devez vous connecter pour accéder à cette page";
            return view('signIn', compact('erreur'));
        }
    }

    public function supprimerInvitation($idActivite, $idPraticien) {
        $uneInvitation = new Invitation();
        $uneInvitation->deleteInvitation($idActivite, $idPraticien);
        if (\Illuminate\Support\Facades\Session::get('id')!=0) {
            // On affiche la liste
            return redirect('/lister');
        } else {
            $erreur = "Vous devez vous connecter pour accéder à cette page";
            return view('signIn', compact('erreur'));
        }
    }

    public function addInvitation() {

        // Création de variables tampon
        $praticien = new Praticien();
        $activite = new Activite_compl();

        // Récupération des listes (pour les select)
        $lesPraticiens = $praticien->getPraticien();
        $lesActivites = $activite->getActivite();

        if (\Illuminate\Support\Facades\Session::get('id')!=0) {
            // Renvoie des listes à la page de formulaire
            return view('ajouterInvitation', compact('lesPraticiens', 'lesActivites'));
        } else {
            $erreur = "Vous devez vous connecter pour accéder à cette page";
            return view('signIn', compact('erreur'));
        }
    }

    public function ajouterInvitation() {
        // Création d'une invitation
        $uneInvitation = new Invitation();

        // Récupération des valeurs du formulaire d'ajout
        $idActivite = Request::input('activite');
        $idPraticien = Request::input('praticien');
        $specialiste = Request::input('specialiste');

        // Vérification de l'existence d'une ligne semblable
        if ($uneInvitation->getUneInvitation($idActivite, $idPraticien) != null) {
            // Création de variables tampon
            $erreur = "Une ligne semblable existe déjà dans la base.";
            $praticien = new Praticien();
            $activite = new Activite_compl();

            // Récupération des listes (pour les select)
            $lesPraticiens = $praticien->getPraticien();
            $lesActivites = $activite->getActivite();

            if (\Illuminate\Support\Facades\Session::get('id')!=0) {
                return view('ajouterInvitation', compact('lesPraticiens', 'lesActivites', 'erreur'));
            } else {
                $erreur = "Vous devez vous connecter pour accéder à cette page";
            return view('signIn', compact('erreur'));
            }
        } else {
            // Ajout de l'invitation
            $uneInvitation->addInvitation($idActivite, $idPraticien, $specialiste);

            if (\Illuminate\Support\Facades\Session::get('id')!=0) {
                // On affiche la liste
                return redirect('/lister');
            } else {
                $erreur = "Vous devez vous connecter pour accéder à cette page";
            return view('signIn', compact('erreur'));
            }
        }
    }

    public function editInvitation($idActivite, $idPraticien) {

        $invitation = new Invitation();
        $praticien = new Praticien();
        $activite = new Activite_compl();

        $uneInvitation = $invitation->getUneInvitation($idActivite, $idPraticien);
        $lesPraticiens = $praticien->getPraticien();
        $lesActivites = $activite->getActivite();

        if (\Illuminate\Support\Facades\Session::get('id')!=0) {
            return view('ajouterInvitation', compact('lesPraticiens', 'lesActivites', 'uneInvitation'));
        } else {
            $erreur = "Vous devez vous connecter pour accéder à cette page";
            return view('signIn', compact('erreur'));
        }
    }

    public function modifierInvitation() {
        $uneInvitation = new Invitation();

        $idActivite = Request::input('activite');
        $idPraticien = Request::input('praticien');
        $specialiste = Request::input('specialiste');

        $uneInvitation->editInvitation($idActivite, $idPraticien, $specialiste);
        if (\Illuminate\Support\Facades\Session::get('id')!=0) {
            // On affiche la liste
            return redirect('/lister');
        } else {
            $erreur = "Vous devez vous connecter pour accéder à cette page";
            return view('signIn', compact('erreur'));
        }
    }

    public function searchInvite() {
        $query = Request::input('search');
        $invitation = new Invitation();

        $lesInvitations = $invitation->searchInvitation($query);
        if (\Illuminate\Support\Facades\Session::get('id')!=0) {
            return view('listerInvitation', compact('lesInvitations'));
        } else {
            $erreur = "Vous devez vous connecter pour accéder à cette page";
            return view('signIn', compact('erreur'));
        }
    }

}
