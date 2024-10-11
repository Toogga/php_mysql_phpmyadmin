<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $clients = [
    //     0 => [
    //         "nom" => "Gambier",
    //         "prenom" => "Benoit"
    //     ],
    //     1 => [
    //         "nom" => "César",
    //         "prenom" => "Jules"
    //     ]
    // ];

    // for($nombre = 0; $nombre < sizeof($clients); $nombre++){
    //     var_dump($clients[$nombre]);
    // };
    $clients = [
        "ref1" => [
            "nom" => "Gambier",
            "prenom" => "Benoit"
        ],
        "ref2" => [
            "nom" => "César",
            "prenom" => "Jules"
        ]
    ];

    foreach($clients as $ref => $client){
        echo "<p>Référence client : $ref</p>";
        echo "<p>{$client["prenom"]} {$client["nom"]}</p>";
    }

    ?>
</body>
</html>