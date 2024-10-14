<?php

$a = 5;
$b = 10;

list($a, $b) = [$b, $a];

echo "Après l'échange : & = $a, b = $b";
echo "<hr>";

$pays = ["France", "Allemagne", "Espagne"];
echo "<pre>";
var_dump($pays);
echo "</pre>";
echo "<hr>";

for($i = 0; $i < count($pays); $i++) {
    echo $pays[$i] . "<br>";
};
echo "<hr>";

foreach($pays as $pays_nom) {
    echo "<pre>";
    echo $pays_nom . " ";
    echo "</pre>";
};
echo "<hr>";

// La boucle do ... while exécute le bloc de code au moins une fois avant de vérifier la condition. Cela signifie qu'elle n'est pas idéale lorsque l'on travaille avec des tableaux, surtout si on ne sait pas à l'avance s'il y a des éléments dans le tableau. Il est plus sûr d'utiliser for ou foreach, qui ne s'exécuteront pas si le tableau est vide.

$pays = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "Espagne" => "Madrid"
];
echo "<hr>";

echo count($pays); // Vaut 3
echo "<hr>";

foreach($pays as $pays_nom => $capitale) {
    echo "La capitale de $pays_nom est $capitale.<br>";
};
echo "<hr>";

function enumerer($t) {
    foreach($t as $index => $valeur) {
        echo "L'index '$index' a la valeur '$valeur'.<br>";
    }
}
enumerer($pays);
echo "<hr>";

function ajouter(&$t) {
    $t["Capitale"] = "Pays";
}

ajouter($pays);
enumerer($pays);
echo "<hr>";

echo "<pre>";
var_dump($pays);
echo "</pre>";

// Après avoir exécuté la fonction ajouter, le tableau aura un nouvel élément avec l'index "Capitale" et la valeur "Pays". Le var_dump montrera que le tableau a été modifié par référence. Cela prouve que la fonction ajouter() modifie le tableau original directement lorsqu'on utilise le passage par référence.