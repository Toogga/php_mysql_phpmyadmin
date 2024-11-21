<?php
// Inclusion du fichier user.php pour avoir accès à la classe User
require_once 'user.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil de l'utilisateur</title>
</head>
<body>

    <h1>Informations de l'utilisateur</h1>

    <?php
    // Affichage du profil utilisateur
    $user->afficherProfil();
    ?>

</body>
</html>