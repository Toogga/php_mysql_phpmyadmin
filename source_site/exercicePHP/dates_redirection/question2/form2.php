<?php

if(isset($_COOKIE['identifie'])) {
    $email = $_COOKIE['identifie'];
    echo "<h1>Bienvenue, $email !</h1>";
} else {
    header("Location: form1.php");
    exit;
}
