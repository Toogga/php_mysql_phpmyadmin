<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Commentaire HTML -->
    <?php
        // On écrit Hello World
        echo "<h1>Hello World!!</h1>";

        $nomPersonne = "Richard";

        // L'injection de variable fonctionne UNIQUEMENT avec les "", pas avec les ''
        echo "<p>Bonjour $nomPersonne, comment ça va ?</p>";

        // Les types de variables
        // Entiers (int)
        $nombre = 85;

        // Décimaux (float)
        $nombre2 = 85.2;

        // Chaînes de caractères (string)
        $chaine = "Ceci est un texte";

        //Booléen (boolean)
        $boolean = true; // false

        // Connaitre le contenu et le type d'un variable
        var_dump($boolean);
    ?>
</body>
</html>