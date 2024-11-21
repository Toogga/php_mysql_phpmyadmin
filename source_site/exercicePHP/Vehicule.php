<?php

class Voiture {

    // Attributs privés

    private $immatriculation;
    private $couleur;
    private $poids;
    private $puissance;
    private $capaciteReservoir;
    private $niveauEssence;
    private $nombrePlaces;
    private $assure;
    private $messageTableauDeBord;


    // Getters pour tous les attributs

    public function getImmatriculation() {

        return $this->immatriculation;

    }


    public function getCouleur() {

        return $this->couleur;

    }


    public function getPoids() {

        return $this->poids;

    }


    public function getPuissance() {

        return $this->puissance;

    }


    public function getCapaciteReservoir() {

        return $this->capaciteReservoir;

    }


    public function getNiveauEssence() {

        return $this->niveauEssence;

    }


    public function getNombrePlaces() {

        return $this->nombrePlaces;

    }


    public function getAssure() {

        return $this->assure;

    }


    public function getMessageTableauDeBord() {

        return $this->messageTableauDeBord;
    }
    // Méthodes

    /**Constructeur de la voiture

       
    @param string $immatriculation

            
    @param string $couleur

            
    @param int $poids

            
    @param int $puissance

            
    @param float $capaciteReservoir

            
    @param float $niveauEssence

    */

    //Constructeur
 
    public function construct($immatriculation, $couleur, $poids, $puissance, $capaciteReservoir, $nombrePlaces) {
 
        $this->immatriculation = $immatriculation;
 
        $this->couleur = $couleur;
 
        $this->poids = $poids;
 
        $this->puissance = $puissance;
 
        $this->capaciteReservoir = $capaciteReservoir;
 
        $this->niveauEssence = 5.0; // Réservoir de 5 litres par défaut
 
        $this->nombrePlaces = $nombrePlaces;
 
        $this->assure = false; // Pas assuré par défaut
 
        $this->messageTableauDeBord = "Bienvenue à bord !"; // Message de bienvenue par défaut
    }
}