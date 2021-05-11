<?php

    class User {
        public $idUtente;
        public $nome;
        public $cognome;
        private $mail;
        public $telefono;
        public $nickname;
        public $post;
        public $commenti;
        public $like;
        public $foto;
        public $registrazione;
        

        function __construct($_mail) {
            $this->mail = $_mail;
        }
    }

    $utente1 = new User("paolo@email.it");
    $utente1->nome = "Paolo";
    $utente1->cognome = "Dossetto";
    $utente1->telefono = 3332211555;
    $utente1->nome = "Paolo";

    echo $utente1-> nome;
