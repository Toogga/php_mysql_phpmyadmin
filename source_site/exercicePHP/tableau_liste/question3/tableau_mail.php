<?php

$tableau_mail = array(
    "php7@free.fr",
    "sacha8@gmail.com",
    "ariel3@wanadoo.fr",
    "webmestre@wanadoo.fr",
    "marcelduchamp9@gmail.com",
    "picasso69@gmail.com",
    "vangogh6@gmail.com",
    "matis63@free.fr",
    "degas45@wanadoo.fr"
);

$fournisseurs = [];

foreach($tableau_mail as $email) {
    $parts = explode("@", $email);
    $domaine = $parts[1];

    if(isset($fournisseurs[$domaine])) {
        $fournisseurs[$domaine]++;
    }else {
        $fournisseurs[$domaine] = 1;
    }
}

$total_emails = count($tableau_mail);

echo "Résultats de sortie :<br>";

foreach($fournisseurs as $domaine => $count) {
    $pourcentage = ($count / $total_emails) * 100;
    echo "Fournisseur d'accès : $domaine = " . number_format($pourcentage, 2) . "%<br>";
}