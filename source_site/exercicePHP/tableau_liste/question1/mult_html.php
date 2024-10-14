<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
        td {
            background-color: #e6e6e6;
        }
    </style>

</head>
<body>
    <h1 style="text-align: center">Une table de multiplication</h1>
    <table>
        <thead>
            <tr>
                <th></th>
                <?php
                // En-tête de la table 1 à 10
                for($nombre = 1; $nombre <=10; $nombre++) {
                    echo"<th>$nombre</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Boucle pour générer les lignes et colonnes
            for($nombre = 1; $nombre <= 10; $nombre++) {
                echo "<tr>";
                echo "<th>$nombre</th>";
                for ($mutiplicateur = 1; $mutiplicateur <= 10; $mutiplicateur++) {
                    $resultat = $nombre * $mutiplicateur;
                    echo "<td>$resultat</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>