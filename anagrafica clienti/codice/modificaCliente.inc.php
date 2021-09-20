<?php
require_once 'db.inc.php'; // connessione al database

        /* passo i valori dei campi del form alle nuove variabili 
           tramite le funzione sicutre mysqli ed imposto la query che andra ad inserire all'interno del database 
           i dati inseriti dall'utente 
        */
        $id = mysqli_real_escape_string($conn,($_POST["nuovoId"]));
        $newCognome = mysqli_real_escape_string($conn,($_POST["nuovoCognome"]));
        $newNome = mysqli_real_escape_string($conn,($_POST['nuovoNome']));
        $newCellulare = mysqli_real_escape_string($conn,($_POST['nuovoCellulare']));
        $newResidenza = mysqli_real_escape_string($conn,($_POST['nuovaResidenza']));
        $newComune = mysqli_real_escape_string($conn,($_POST['nuovoComune']));
        $newEta = mysqli_real_escape_string($conn,($_POST['nuovaEta']));

        $query = "UPDATE `clienti` 
                 SET `cognome` = '$newCognome', `nome` = ' $newNome', `cellulare` = '$newCellulare', 
                 `residenza` = ' $newResidenza', `comune` = ' $newComune ', `eta` = ' $newEta '
                WHERE `clienti`.`idCliente` = '$id' ";

        $result = mysqli_query($conn,$query);
        header("location: index.php");

        