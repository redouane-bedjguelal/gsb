<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;


class Praticien {
     //On déclare la table Praticien

    protected $table = 'praticien';
    protected $fillable = [
        'id_praticien',
        'id_type_praticien',
        'nom_praticien',
        'prenom_praticien',
        'adresse_praticien',
        'cp_praticien',
        'ville_praticien',
        'coef_praticien',
    ];

    // Constructeur de Praticien
    public function __construct() {
        $this->id_praticien = 0;
    }

    // Fonction récupérant tous les praticiens dans la base
    public function getPraticien() {
        // Dialogue avec la BDD
        $lesPraticiens = DB::table('praticien')
                ->join('type_praticien', 'praticien.id_type_praticien', '=', 'type_praticien.id_type_praticien')
                ->Select('praticien.*', 'type_praticien.lib_type_praticien')
                ->get();
        return $lesPraticiens;
    }
    
    // Fonction récupérant un praticien selon son nom ou son type
    public function getUnPraticien($query) {
        // Dialogue avec la BDD
        $lePraticien = DB::table('praticien')
                ->join('type_praticien', 'praticien.id_type_praticien', '=', 'type_praticien.id_type_praticien')
                ->Select('praticien.*', 'type_praticien.lib_type_praticien')
                ->where('nom_praticien','like', "%".$query."%")
                ->orWhere('type_praticien.lib_type_praticien','like', "%".$query."%")
                ->get();
        return $lePraticien;
    }
    
    // Fonction récupérant tous les praticiens selon leur id type
    public function getPraticienByType($type) {
        // Dialogue avec la BDD
        $lesPraticiens = DB::table('praticien')
                ->Select()
                ->where('id_type_praticien', $type)
                ->get();
        return $lesPraticiens;
    }
}