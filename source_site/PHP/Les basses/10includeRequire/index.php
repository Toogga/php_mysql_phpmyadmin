<?php
    // On inclut le fichier functions.php
    require_once "includes/functions.php";
    require_once "includes/functions.php";

    // On défini le titre
    $titre = "Liste des articles";

    //On inclut le header
    // @ devant le include permer de ne pas afficher le message d'erreur
    @include "includes/header.php";

    //On inclut la navbar
    include_once "includes/navbar.php";

    // On écrit le contenu de la page
?>

<p>Contenu de la page d'accueil</p>

<?php
    verifForm();
    //On inclut le footer
    include "includes/footer.php";