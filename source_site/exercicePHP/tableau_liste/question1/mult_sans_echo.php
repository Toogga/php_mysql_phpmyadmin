<?php
$output = "<html><head><title>Table de multiplication</title></head><body>";
$output .= "<h1 style='text-align: center;'>Une table de multiplication</h1>";
$output .= "<table border='1' style='border-collapse: collapse; width: 50%; margin: 20px auto;'>";

// En-tête
$output .= "<thead><tr><th></th>";
for ($i = 1; $i <= 10; $i++) {
    $output .= "<th>$i</th>";
}
$output .= "</tr></thead><tbody>";

// Corps du tableau
for ($i = 1; $i <= 10; $i++) {
    $output .= "<tr><th>$i</th>";
    for ($j = 1; $j <= 10; $j++) {
        $output .= "<td>" . ($i * $j) . "</td>";
    }
    $output .= "</tr>";
}

$output .= "</tbody></table>";
$output .= "</body></html>";

echo $output;