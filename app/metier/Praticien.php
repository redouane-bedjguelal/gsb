<?php

namespace App\metier;

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
                ->Select()
                ->get();
        return $lesPraticiens;
    }
    
    // Fonction récupérant un praticien selon son nom
    public function getPraticienByNom($nom) {
        // Dialogue avec la BDD
        $lePraticien = DB::table('praticien')
                ->Select()
                ->where('nom_praticien', $nom)
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