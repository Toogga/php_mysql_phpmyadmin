<?php
namespace Controller;

use Model\Database;
use Model\Contact;
require_once '../Model/Database.class.php';
require_once '../Model/Contact.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $contact = new Contact($nom, $email, $message);
    $db = new Database();
    $db->insertContact($contact);

    // Envoi du mail (à implémenter)
    // ...

    echo 'Votre message a bien été envoyé.';
}

?>