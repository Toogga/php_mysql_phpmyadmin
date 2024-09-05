<?php
$host = 'mysql' ;    //Nom donné dans le docker-compose.yml
$user = 'root' ;   
$password = 'root_password';   
$db = 'sdbm_v2';  
echo "<h1>Page INDEX</h1>";
echo "<h2>Host $host</h2>";
$conn = new mysqli($host,$user,$password,$db);
if(!$conn) {echo "Erreur de connexion à MSSQL<br />";}
else{
        echo "Connexion à MySql ok<br />";

        // Liste des ARTICLES
    // On créé la requête
    $req = "SELECT * FROM article";
    
    // on envoie la requête
    $res = $conn->query($req);
    
    // on va scanner tous les tuples un par un
    echo "<table border='2px'>";
    while ($data = mysqli_fetch_array($res)) {
        // on affiche les résultats
        echo "<tr><td>".$data['ID_ARTICLE']."</td><td>".$data['NOM_ARTICLE']."</td></tr>";
    }
    echo "</table>";

        mysqli_close($conn);
}

?>
