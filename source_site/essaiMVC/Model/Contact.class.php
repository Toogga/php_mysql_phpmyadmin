<?php
namespace Model;

class Contact {
    public $nom;
    public $email;
    public $message;

    public function __construct($nom, $email, $message) {
        $this->nom = $nom;
        $this->email = $email;
        $this->message = $message;
    }
}

?>