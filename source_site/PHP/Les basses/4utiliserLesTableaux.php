<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo"<pre>";

        // Déclarer un tableau
        $tableau = ["bonjour", 15, true, 58.15, "Brouette", 45, false];

        // Ajouter des valeurs
        // A la fin (push)
        array_push($tableau, "Fin");

        // Au début (unshift)
        array_unshift($tableau, "Début");

        // Supprimer des valeurs
        // A la fin (pop)
        $valeur = array_pop($tableau);

        // Au début (shift)
        $valeur = array_shift($tableau);

        // Diviser le tableau en plusieurs parties de 2 valeurs
        $tableau2 = array_chunk($tableau, 2, true);

        // Mélanger un tableau
        shuffle($tableau);

        $tableauMulti = [
            0 => [
                "nom" => "Gambier",
                "prenom" => "Benoit",
                "age" => 25
            ],
            1 => [
                "nom" => "Lefebvre",
                "prenom" => "Roger",
                "age" => 58
            ],
        ];

        var_dump($tableau);
        // echo $valeur;
        echo"</pre>";
    ?>
</body>
</html>