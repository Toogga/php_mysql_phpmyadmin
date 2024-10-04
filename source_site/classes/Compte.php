<?php
/**
 * Objet compte bancaire
 */
class Compte 
{
    // Propriétés
    /**
     * Titulaire du compte
     * 
     * @var string
     */
    public $titulaire;

    /**
     * Solde du compte
     * 
     * @var float
     */
    public $solde;

    // Méthodes
    /**
    * constructeur du compte bancaire
    * 
    * @param string $nom Nom du titulaire
    * @param float $montant Montant du solde à l'ouberture
    */
    public function __construct(string $nom, float $montant = 100)
    {
        // On atribue le nom à la propriété titulaire de l'instance créée
        $this->titulaire = $nom;

        // On attribue le montant à la propriété solde
        $this->solde = $montant;

    }

    /**
     * Déposer de l'argent sur le compte
     * 
     * @param float $montant Montant a déposer
     * @return void
     */
    public function deposer(FLOAT $montant)
    {
        // On verifie si le montant est positif
        if($montant > 0){
            $this->solde += $montant;
        }
    } 
    /**
     * Retourne une chaine de caractères affichant le solde
     * 
     * @return string
     */
    public function voirSolde()
    {
        return "Le solde du compte est de $this->solde euros";
    }
    /**
     * Retirer un montant du lode su compte
     * 
     * @param float $montant Montant à retirer
     * @return void
     */
    public function retirer(float $montant)
    {
        // On vérifie le mointant et le solde
        if($montant > 0 && $this->solde >= $montant){
            $this->solde -= $montant;
        }else{
            echo "Montant invalide ou solde insuffisant";
        }

    }
}