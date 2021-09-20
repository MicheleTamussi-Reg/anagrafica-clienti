<?php
require_once 'db.inc.php'; // connessione al database

        /* passo i valori dei campi del form alle nuove variabili 
           tramite le funzione sicutre mysqli ed imposto la query che andra ad inserire all'interno del database 
           i dati inseriti dall'utente 
        */
        
        $cognome = mysqli_real_escape_string($conn,($_POST["cognome"]));
        $nome = mysqli_real_escape_string($conn,($_POST['nome']));
        $cellulare = mysqli_real_escape_string($conn,($_POST['cellulare']));
        $residenza = mysqli_real_escape_string($conn,($_POST['residenza']));
        $comune = mysqli_real_escape_string($conn,($_POST['comune']));
        $eta = mysqli_real_escape_string($conn,($_POST['eta']));

        $result = mysqli_query($conn,"INSERT INTO `clienti` (`idCliente`, `cognome`, `nome`, `cellulare`, `residenza`, `comune`, `eta`) 
        VALUES (NULL, '$cognome', '$nome', '$cellulare', '$residenza', '$comune', '$eta')");
        
        header("location: index.php");
      
    


    