<?php
if (isset($_GET['nom']) && isset($_GET['age']) && isset($_GET['marit'])) {
    $nom = $_GET['nom'];
    $age = $_GET['age'];
    $marit = $_GET['marit'];

    $interet = isset($_GET['interet']) ? $_GET['interet'] : [];

    $interests_list = implode(", ", $interet);

    echo "Merci à vous, $nom.<br>";
    echo "Vous avez donc le bel âge de $age ans, vous êtes $marit.<br>";
    echo "Et vous vous intéressez à $interests_list.<br><br>";

    $interet_values = implode(",", array_map('intval', $interet));
    echo "J'empressé d'envoyer la requête :<br>";
    echo "Insert into Matable values('$nom', $age, '$marit', $interet_values);<br>";
}
?>