<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /**
         * Permet de calculer la somme de 2 valeurs
         * @param float $nb1 Premier nombre
         * @param float $nb2 Second nombre
         * @return mixed Somme des deux valeurs
         */
        function additionner($nb1, $nb2){
            return $nb1 + $nb2;
        }
        /**
         * Permet de saluer de façon personalisé
         * @param mixed $prenom
         * @param mixed $nom
         * @param mixed $civilite
         * @param mixed $salutation
         * @return void
         */
        function saluer($prenom, $nom, $civilite = "", $salutation = "Hello"){
            echo "$salutation $civilite $prenom $nom";
        }

        $total = additionner(18, 8);
        var_dump($total);
    ?>

    <h1><?php saluer("Benoit","Gambier", "M.", "Bonjour") ?></h1>

</body>
</html>