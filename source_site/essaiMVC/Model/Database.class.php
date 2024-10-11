<?php
namespace Model;

define('USER',"root");
define('PASSWD',"root_password");
define('SERVER',"mysql82");
define('BASE',"filrouge");

class Database {
    private $pdo;

    public function __construct() {
        // Connexion à la base de données (remplacer par vos informations)
        $dsn = 'mysql:host='. SERVER .';dbname='. BASE;
        $user = USER;
        $password = PASSWD;

        try {
            $this->pdo = new \PDO($dsn, $user, $password);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
    }

    // Méthode pour insérer un nouveau contact
    public function insertContact(Contact $contact) {
        $stmt = $this->pdo->prepare('INSERT INTO contact (nom, email, message) VALUES (:nom, :email, :message)');
        $stmt->bindParam(':nom', $contact->nom);
        $stmt->bindParam(':email', $contact->email);
        $stmt->bindParam(':message', $contact->message);
        $stmt->execute();
    }
}
?>