<?php
require_once 'classes/Compte.php';

// On instancie le compte
$compte1 = new Compte('Benoit', 500);

$compte1->setSolde(200);

// On écrit dans le propriété titulaire
//$compte1->titulaire = 'Benoit';

// On ecrit dans la propriété solde
//$compte1->solde = 'Bonjour';

// On depose 1OO€
$compte1->deposer(100);

echo $compte1->getTitulaire();

?>
<p><?php echo $compte1->voirSolde();?></p> 
<?php

$compte1->retirer(700);

var_dump($compte1);

//$compte2 = new Compte('Robert');
//$compte2-> titulaire = 'Robert';
//$compte2->solde = 389.25;

//var_dump($compte2);