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