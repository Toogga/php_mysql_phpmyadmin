<?php
$msg ="";
$erreur = false;

$utilisateurs = array(
    "jean_valjean@academie.net" => "hugo",
    "steve_ostin@lesseries.org" => "2md",
    "david_banner@marvel.com" => "hulk"
);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if(empty($email) || empty($password)) {
        $msg = "Saisie obligatoire.";
    } else {
        if(isset($utilisateurs[$email]) && $utilisateurs[$email] === $password) {
            setcookie("identifie", $email, time() + 3600);
            header("Location: form2.php");
            exit;
        } else {
            $msg = "Erreur : Identifiants incorrects.";
            $erreur = true;
        }

    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>
<body>
    <h1>connexion</h1>

    <?php if($msg): ?>
    <p style="color: red;"><?php echo $msg; ?></p>
    <?php endif; ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email :</label>
        <input for="email" name="email" id="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" require><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password"require><br><br>

        <button tupe="submit">Se connecter</button>
    </form>
</body>
</html>