<?php

// parametri necessari per stabilire la connessione
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "anagrafica clienti";

// dichiaro $conn che tramite mysqli si collega al database sfruttando i parametri conosciuti
$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

// controllo che la connessione sia stata stabilita con successo
    if(!$conn){ 

    // in caso contrario chiudo la connessione e restituisco il relativo messaggio di errore
    die("connessione fallita: " . mysqli_connect_error()); 
    
}