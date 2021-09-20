<?php
session_start(); // inizio una nuova sessione
require_once 'db.inc.php'; // richiedo la connessione al database

if ($_SERVER["REQUEST_METHOD"] === "POST"){  // controllo che il server stia scambiando dati in POST
  
    if (isset($_POST["submit"])){ //controllo che il pulsante di login sia stato azionato

        // memorizzo nelle nuove variabili i dati inseriti dall'utente
        $username = mysqli_real_escape_string($conn,($_POST["username"]));
        $password = mysqli_real_escape_string($conn,($_POST["pw"]));
        // uso mysqli per inviare una query al database
        $result = mysqli_query
        ($conn,"SELECT * FROM dipendenti WHERE nome = '$username' and pw = '$password'"); // query interrogativa
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); // stampo una riga come array associativo
        if ($row['nome']===$username && $row['pw']===$password){ // controllo la combinazione dei parametri inseriti e da database
            $_SESSION['id'] = sha1($username); // imposto un id di sessione tramite hashing dello username
}
else echo "password sbagliata"; 

if (isset($_SESSION['id'])){
    header("location: index.php");
   
    }
else{
    echo"Errore di sessione";
}
      
       }   
}