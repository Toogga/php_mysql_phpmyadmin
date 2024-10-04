<?php

session_start();


if (isset($_SESSION['username'])) {
    echo "<html><head><title>Menu</title></head><body>";
    echo "<h1>Bienvenue, " . htmlspecialchars($_SESSION['username']) . "!</h1>";
    echo "<p>Ceci est le menu de votre application.</p>";
    echo "</body></html>";
} else {
    
    header('Location: login.htm');
    exit();
}
?>