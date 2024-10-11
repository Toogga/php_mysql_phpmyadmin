<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $chaines = "Ceci est une chaîne de caractères ";

        // Afficher 1 caractère de la chaîne
        // echo $chaine[5];

        // Modifier un caractère de la chaîne
        // $chaine[0] = "F";

        // Extraire une partie de la chaine
        // var_dump(substr($chaine, -1));

        // Remplacer une partie de la chaîne
        $chaine = str_ireplace('ceci','Celà', $chaines);

        // var_dump(str_contains($chaine, 'brouette'));
        // var_dump(str_contains($chaine, 'une'));
        // var_dump(str_starts_with($chaine, 'Ce'));
        // var_dump(str_ends_with($chaine, 'ères '));
        // var_dump(trim($chaine));
        var_dump(strpos($chaine, "Le"));
    ?>
</body>
</html>