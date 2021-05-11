<?php

require_once("user.php");

    $utente1 = new User("paolo@email.it");
    $utente1->nome = "Paolo";
    $utente1->cognome = "Dossetto";
    $utente1->telefono = 3332211555;
    $utente1->nome = "Paolo";

    
    foreach($utente1 as $K => $properties) {
        echo $K . ":" . "  " .  $properties . "<br>";
    }
