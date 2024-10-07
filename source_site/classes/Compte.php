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
    private $titulaire;

    /**
     * Solde du compte
     * 
     * @var float
     */
    private $solde;

    // Méthodes
    /**
    * constructeur du compte bancaire
    * 
    * @param string $nom Nom du titulaire
    * @param float $montant Montant du solde à l'ouberture
    */
    public function __construct(string $nom, float $montant = 500)
    {
        // On atribue le nom à la propriété titulaire de l'instance créée
        $this->titulaire = $nom;

        // On attribue le montant à la propriété solde
        $this->solde = $montant;

        echo $this->decouvert();

    }

    // Accesseurs

    /**
     * Getter de Titulaire - Retourne la valeur du titutlaire du compte
     * @return string
     */
    public function getTitulaire()
    {
        return $this->titulaire;
    }
    /**
     * Setter de Titulaire - Modifie le nom du titutlaire et retourne l'objet
     * @param string $nom Nom du titulaire
     * @return Compte Compte bancaire
     */
    public function setTitulaire(string $nom): self
    {
        // On verrivie si on a un titulaire
        if($nom != ""){
            $this->titulaire = $nom;
        }
        return $this;
    }
    /**
     * Retourne le solde du compte
     * @return float Solde du compte
     */
    public function getSolde(): float
    {
        return $this->solde;
    }


    /**
     * Modifie le solde du compte 
     * @param float $montant Montant du solde 
     * @return Compte Compte bancaire
     */
    public function setSolde(float $montant): self
    {
        if($montant >= 0){
            $this->solde = $montant;
        }
        return $this;
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
        return "Le solde du compte est de $this->solde euros <hr/>";
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
            echo "Montant invalide ou solde insuffisant <hr/>" ;
        }
        echo $this->decouvert();

    }

    public function decouvert()
    {
        if($this->solde < 0){
            return "Vous êtes à découvert <hr/>";
        }else{
            return "Vous n'êtes pas à découvert <hr/>";
        }
    }
}