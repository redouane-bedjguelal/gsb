<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;

class Activite_compl {

    //On déclare la table Activite_compl

    protected $table = 'activite_compl';
    protected $fillable = [
        'id_activite_compl',
        'date_activite',
        'lieu_activite',
        'theme_activite',
        'motif_activite',
    ];

    // Constructeur d'activité
    public function __construct() {
        $this->id_activite_compl = 0;
    }

    // Fonction récupérant toutes les activités dans la base
    public function getActivite() {
        // Dialogue avec la BDD
        $lesActivites = DB::table('activite_compl')
                ->Select()
                ->get();
        return $lesActivites;
    }
    
}
