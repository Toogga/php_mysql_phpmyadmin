<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // On pose une question
    $a = 58;
    $b = 17;
    // Pour comparer ==, ===, <, <=, >, >=, !=, !==, <=>
    echo ($a <=> $b);
    /*
    <  -> -1  a < b
    =  ->  0  a = b
    >  ->  1  a > b
    */

    // $animal ="Chat";

    switch($a <=> $b){
        case -1:
            echo "A plus petit que B";
            break;
        case 0:
            echo "A égal B";
            break;
        case 1:
            echo "A plus grand que B";
            break;
    }
    ?>
</body>
</html>