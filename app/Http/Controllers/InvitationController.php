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
        return view('listerInvitation', compact('lesInvitations'));
    }
    
    public function addInvitation(){
        
        $praticien = new Praticien();
        $activite = new Activite_compl();
        
        $lesPraticiens = $praticien->getPraticien();
        $lesActivites = $activite->getActivite();
        
        return view('ajouterInvitation',compact('lesPraticiens', 'lesActivites'));
    }
    
    public function ajouterInvitation(){
        $uneInvitation = new Invitation();
        $idActivite = Request::input('activite');
        $idPraticien = Request::input('praticien');
        $specialiste = Request::input('specialiste');
        $uneInvitation->addInvitation($idActivite, $idPraticien, $specialiste);
        // On affiche la liste
        return redirect('/lister');
    }
    
    public function editInvitation(){
        
        $praticien = new Praticien();
        $activite = new Activite_compl();
        
        $lesPraticiens = $praticien->getPraticien();
        $lesActivites = $activite->getActivite();
        
        return view('ajouterInvitation',compact('lesPraticiens', 'lesActivites'));
    }
    
    public function modifierInvitation($idActivite, $idPraticien, $specialiste){
        $uneInvitation = new Invitation();
        $uneInvitation->editInvitation($idActivite, $idPraticien, $specialiste);
        // On affiche la liste
        return view('listerInvitation', compact('lesInvitations'));
    }
}
