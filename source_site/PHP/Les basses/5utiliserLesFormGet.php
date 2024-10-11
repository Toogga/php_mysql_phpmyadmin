<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <div>
            <label for="nombre1">Nombre 1 :</label>
            <input type="number" id="nombre" name="nb1">
        </div>
        <div>
            <label for="nombre2">Nombre 2 :</label>
            <input type="number" id="nombre" name="nb2">
        </div>
        <button type="submit">Calculer</button>
    </form>
    <?php
        // http://localhost:81/PHP/Les%20basses/5utiliserLesFormGet.php?nb1=124&nb2=36&demo=brouette
        // echo"<pre>";
        // var_dump($_GET["nb1"]);
        // echo"</pre>";

        $total = $_GET["nb1"] + $_GET["nb2"];
        echo "<p>Total : $total</p>";
        echo $_GET["demo"];

    ?>
</body>
</html>