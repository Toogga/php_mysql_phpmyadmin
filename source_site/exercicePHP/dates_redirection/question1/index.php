<?php
// Fonction de vérification de la date
function verifier($d) {
    // Afficher la valeur soumise
    echo "Date soumise : $d <br>";

    // Définir le masque d'expression régulière pour le format jj/mm/aaaa
    $pattern = "#^([0-2][0-9]|(3)[0-1])/(0[1-9]|1[0-2])/\d{4}$#";

    // Vérifier si la date correspond au format
    if (!preg_match($pattern, $d)) {
        echo "Erreur : Le format de la date est incorrect. Utilisez jj/mm/aaaa.<br>";
        return;
    }

    // Extraire le jour, le mois et l'année
    list($jour, $mois, $annee) = explode("/", $d);

    // Vérifier si la date est valide
    if (!checkdate($mois, $jour, $annee)) {
        echo "Erreur : La date n'est pas valide.<br>";
        return;
    }

    echo "La date est valide !<br>";
}

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer la valeur du champ "jour"
    $jour = $_POST['jour'];
    
    // Appeler la fonction de vérification de la date
    verifier($jour);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Validation de la date</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="jour">Date (jj/mm/aaaa) :</label>
    <input type="text" id="jour" name="jour" required>
    <button type="submit">Soumettre</button>
</form>

</body>
</html>