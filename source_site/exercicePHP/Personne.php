<?php
class Personne {

    public $nom;
    public $societe;

    public function afficher() {
        echo "Je m'appelle " . $this->nom;
        echo " et je travaille chez " . $this->societe . "\n";
    }
}
echo "Bonjour";
$p = new Personne();
$p->nom = "Dupont";