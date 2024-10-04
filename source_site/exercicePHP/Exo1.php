<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $helloWorld = 'Hello World !';
    for ($i = 5; $i <= 1; $i--) {
        echo '<h' . $i .'>' . $helloWorld . '</h' . $i . '>' . '<br />';
    }
    ?>
</body>
</html>