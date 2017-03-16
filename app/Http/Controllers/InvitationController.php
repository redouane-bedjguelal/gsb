<?php

namespace App\Http\Controllers;

use Request;
use App\metier\Invitation;

class InvitationController extends Controller {

    public function getInvitations() {
        $uneInvitation = new Invitation();
        $lesInvitations = $uneInvitation->getInvitations();
        // On affiche la liste
        return view('listerInvitations', compact('lesInvitations'));
    }
        
    public function getInvitationByPraticien($id) {
        $uneInvitation = new Invitation();
        $lesInvitations = $uneInvitation->getInvitationByPraticien($id);
        // On affiche la liste
        return view('listerInvitations', compact('lesInvitations'));
    }

    public function supprimerInvitation($idActivite, $idPraticien){
        $uneInvitation = new Invitation();
        $uneInvitation->deleteInvitation($idActivite, $idPraticien);
        // On affiche la liste
        return view('listerInvitations', compact('lesInvitations'));
    }
    
    public function ajouterInvitation($idActivite, $idPraticien, $specialiste){
        $uneInvitation = new Invitation();
        $uneInvitation->addInvitation($idActivite, $idPraticien, $specialiste);
    }
}
