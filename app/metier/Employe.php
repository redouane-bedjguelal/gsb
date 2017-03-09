<?php

namespace App\metier;

class Employe {
    private $civilite;
    private $prenom;
    private $nom;
    private $pwd;
    private $profil;
    private $interet;
    private $message;
    
    public function __construct($civilite,$nom,$prenom,$pwd,$profil,$interet,$message) {
        $this->civilite = $civilite;
        $this->prenom = $prenom;
        $this->nom= $nom;
        $this->pwd= $pwd;
        $this->profil = $profil;
        $this->interet = $interet;
        $this->message = $message;
    }
    public function getCivilite() {
        return $this->civilite;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getPwd() {
        return $this->pwd;
    }
    public function getProfil() {
        return $this->profil;
    }
    public function getInteret() {
        return $this->interet;
    }
    public function getMessage() {
        return $this->message;
    }
}