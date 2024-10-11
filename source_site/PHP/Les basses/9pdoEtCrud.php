<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Contantes d'environnement
        define("DBHOST","mysql");
        define("DBUSER","root");
        define("DBPASS","root_password");
        define("DBNAME","tutos-php");

        // DSN de connexion
        $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

        // On va se connecter à la base
        try{
            // On instancie PDO
            $db = new PDO($dsn, DBUSER, DBPASS);
            
            // On s'assure d'envoyer les données en UTF8
            $db->exec("SET NAMES utf8");

            // On définit le mode de "fetch" par défaut
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        }catch(PDOException $e){
            die("Erreur :".$e->getMessage());
        }

        // Ici on est connecter à la base
        // On peut récuperer la liste des utilisateurs (users)
        $sql = "SELECT * FROM `users` WHERE `id` = 1";

        // On exécute directement la requête
        $requete = $db->query($sql);

        // On récupère les données (fetch ou fetchAll)
        $user = $requete->fetch();

        // Ajouter un utilisateur
        $sql = "INSERT INTO `users`(`email`,`pass`,`roles`) VALUES ('demo@hotmail.fr','azerty', '[\"ROLE_USER\"]')";

        $requete = $db->query($sql);

        // Modifier un utilisateur
        $sql = "UPDATE `users` SET `pass` = 'azerty' WHERE `id` = 3";

        $requete = $db->query($sql);

        // Supprimer des utilisateurs
        $sql = "DELETE FROM `users` WHERE `id` > 3";

        $requete = $db->query($sql);

        // Savoir combien de lignes on été supprimées
        echo $requete->rowCount();

    ?>
</body>
</html>