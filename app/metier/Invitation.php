<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;


class Invitation {

//On déclare la table Inviter

    protected $table = 'inviter';
    protected $fillable = [
        'id_activite_compl',
        'id_praticien',
        'specialiste'
    ];

// Constructeur d'invitation
    public function __construct() {
        $this->id_activite_compl = 0;
    }

// Fonction récupérant tous les praticiens dans la base
    public function getInvitations() {
// Dialogue avec la BDD
        $lesInvitations = DB::table('inviter')
                ->join('praticien', 'inviter.id_praticien', '=', 'praticien.id_praticien')
                ->join('type_praticien', 'praticien.id_type_praticien', '=', 'type_praticien.id_type_praticien')
                ->join('activite_compl', 'inviter.id_activite_compl', '=', 'activite_compl.id_activite_compl')
                ->Select('inviter.*','praticien.*', 'type_praticien.lib_type_praticien', 'activite_compl.*')
                ->get();
        return $lesInvitations;
    }

// Fonction récupérant un praticien selon son nom
    public function getInvitationByPraticien($id) {
// Dialogue avec la BDD
        $invitation = DB::table('inviter')
                ->Select()
                ->where('id_praticien', $id)
                ->get();
        return $invitation;
    }

// Fonction supprimant une invitation de la base
    public function deleteInvitation($idActivite, $idPraticien) {
// Dialogue avec la BDD
        DB::table('inviter')
                ->where([['id_activite_compl', $idActivite], ['id_praticien', $idPraticien],])
                ->delete();
    }

// Fonction ajoutant une invitation dans la base de données
    public function addInvitation($idActivite, $idPraticien, $specialiste) {
// Dialogue avec la BDD
        DB::table('inviter')
                ->insert(['id_activite_compl' => $idActivite, 'id_praticien' => $idPraticien, 'specialiste' => $specialiste]);
    }

// Fonction de modification d'une invitation dans la BDD
    public function editInvitation($idActivite, $idPraticien, $specialiste) {
// Dialogue avec la BDD
        DB::table('inviter')
                ->where([['id_activite_compl', $idActivite], ['id_praticien', $idPraticien],])
                ->update(['id_activite_compl' => $idActivite, 'id_praticien' => $idPraticien, 'specialiste' => $specialiste]);
    }

}
