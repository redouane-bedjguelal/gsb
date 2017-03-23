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
        // On affiche la liste
        return view('listerInvitation', compact('lesInvitations'));
    }
        
    public function getInvitationByPraticien($id) {
        $uneInvitation = new Invitation();
        $lesInvitations = $uneInvitation->getInvitationByPraticien($id);
        // On affiche la liste
        return view('listerInvitation', compact('lesInvitations'));
    }

    public function supprimerInvitation($idActivite, $idPraticien){
        $uneInvitation = new Invitation();
        $uneInvitation->deleteInvitation($idActivite, $idPraticien);
        // On affiche la liste
        return redirect('/lister');
    }
    
    public function addInvitation(){
        
        // Création de variables tampon
        $praticien = new Praticien();
        $activite = new Activite_compl();
        
        // Récupération des listes (pour les select)
        $lesPraticiens = $praticien->getPraticien();
        $lesActivites = $activite->getActivite();
        
        // Renvoie des listes à la page de formulaire
        return view('ajouterInvitation',compact('lesPraticiens', 'lesActivites'));
    }
    
    public function ajouterInvitation(){
        // Création d'une invitation
        $uneInvitation = new Invitation();
        
        // Récupération des valeurs du formulaire d'ajout
        $idActivite = Request::input('activite');
        $idPraticien = Request::input('praticien');
        $specialiste = Request::input('specialiste');
        
        // Ajout de l'invitation
        $uneInvitation->addInvitation($idActivite, $idPraticien, $specialiste);
        
        // On affiche la liste
        return redirect('/lister');
    }
    
    public function editInvitation($idActivite, $idPraticien){
        
        $invitation = new Invitation();
        $praticien = new Praticien();
        $activite = new Activite_compl();
        
        $uneInvitation = $invitation->getUneInvitation($idActivite, $idPraticien);
        $lesPraticiens = $praticien->getPraticien();
        $lesActivites = $activite->getActivite();
        
        return view('ajouterInvitation',compact('lesPraticiens', 'lesActivites', 'uneInvitation'));
    }
    
    public function modifierInvitation(){
        $uneInvitation = new Invitation();
        
        $idActivite = Request::input('activite');
        $idPraticien = Request::input('praticien');
        $specialiste = Request::input('specialiste');
        
        $uneInvitation->editInvitation($idActivite, $idPraticien, $specialiste);
        // On affiche la liste
        return redirect('/lister');
    }
}
