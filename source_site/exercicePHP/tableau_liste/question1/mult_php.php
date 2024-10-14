<?php
echo "<html><head><title>Table de multiplication</title></head><body>";
echo "<h1 style='text-align: center;'>Une table de multiplication</h1>";
echo "<table border='1' style='border-collapse: collapse; width: 50%; margin: 20px auto;'>";
    
// En-tête
echo "<thead><tr><th></th>";
for ($nombre = 1; $nombre <= 10; $nombre++) {
    echo "<th>$nombre</th>";
}
echo "</tr></thead><tbody>";

// Corps du tableau
for ($nombre = 1; $nombre <= 10; $nombre++) {
    echo "<tr><th>$nombre</th>"; // Première colonne (numéros)
    for ($mutiplicateur = 1; $mutiplicateur <= 10; $mutiplicateur++) {
        echo "<td>" . ($nombre * $mutiplicateur) . "</td>";
    }
    echo "</tr>";
}

echo "</tbody></table>";
echo "</body></html>";