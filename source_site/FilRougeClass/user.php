<?php

class User {

    // Attributs de la classe en privé
    private $id_user;
    private $nom;
    private $prenom;
    private $email;
    private $pseudo;
    private $password;
    private $pays;
    private $telephone;

    // Constructeur
    public function __construct($id_user, $nom, $prenom, $email, $pseudo, $password, $pays, $telephone) {
        $this->id_user = $id_user;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->pseudo = $pseudo;
        $this->password = $password;
        $this->pays = $pays;
        $this->telephone = $telephone;
    }

    // Getters
    public function getNom() {
        return $this->nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function getemail() {
        return $this->email;
    }
    public function getPseudo() {
        return $this->pseudo;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getPays() {
        return $this->pays;
    }
    public function getTelephone() {
        return $this->telephone;
    }

    // Méthodes
    public function afficherProfil() {
        echo "<pre>";
        echo "Id utilisateur : " . $this->id_user . " .<br>";
        echo "Nom : " . $this->nom . " .<br>";
        echo "Prénom : " . $this->prenom . " .<br>";
        echo "Email : " . $this->email . " .<br>";
        echo "Pseudo : " . $this->pseudo . " .<br>";
        echo "Password : " . $this->password . " .<br>";
        echo "Pays : " . $this->pays . " .<br>";
        echo "Téléphone : " . $this->telephone . " .<br>";
        echo "</pre>";
    }
}

// Objet
$user = new User(1, "Smith", "John", "john.smith@example.com", "john123", "password", "Amérique", "888 718 4242");