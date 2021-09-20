<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cercaClientiStyle.css">
</head>
<body>
    <h1>Corrispondenze nel database:</h1>
    
</body>
</html>
<?php
 require_once "db.inc.php"; // chiamata al database
 if ($_SERVER["REQUEST_METHOD"] === "POST"){ //controllo che la richiesta al server avvenga tramite metodo "POST"
     if (isset($_POST["cercaClienteBtn"])){ // controllo che il pulsante "cercaCliente" sia stato attivato

         ///// estrazione valori dei parametri di ricerca
         $id = mysqli_real_escape_string($conn,($_POST["searchById"])); 
         $nome = mysqli_real_escape_string($conn,($_POST["searchByNome"]));
         $cognome = mysqli_real_escape_string($conn,($_POST["searchByCognome"]));
         $cellulare = mysqli_real_escape_string($conn,($_POST["searchByCell"]));
         
 }
}
///////////////////////////////// 
// se tutti i campi di ricerca sono vuoti vieni reindirizzato alla pagina di ricerca
 if (empty($id) && empty($nome) && empty($cognome) && empty($cellulare)){
    header("location: cercaClienti.php");
} 

/////// ricerca cliente tramite id
if(!empty($id)){
    $result = mysqli_query($conn,"SELECT * FROM `clienti` WHERE idCliente = '$id'");
    while($row = mysqli_fetch_array($result)) 
    echo "<div class='myBox';><h3 style='color:black ;'>" . "ID: " . $row['idCliente'] ."<br>". "cognome: " .  $row['cognome'] ."<br> "."nome: ". $row['nome'] ." <br>"."cellulare: ". $row['cellulare'] ."<br> "."residenza: ". $row['residenza'] .
    " <br>" . "comune: ". $row['comune'] ." <br>"."età: ". $row['eta'] ."</h3></div>";  
}    

/////// ricerca cliente tramite cognome
if(!empty($cognome)){
    $result = mysqli_query($conn,"SELECT * FROM `clienti` WHERE cognome = '$cognome'");
    while($row = mysqli_fetch_array($result)) 
    echo "<div class='myBox';><h3 style='color:black ;'>" . "ID: " . $row['idCliente'] ."<br>". "cognome: " .  $row['cognome'] ."<br> "."nome: ". $row['nome'] ." <br>"."cellulare: ". $row['cellulare'] ."<br> "."residenza: ". $row['residenza'] .
    " <br>" . "comune: ". $row['comune'] ." <br>"."età: ". $row['eta'] ."</h3></div>";       
} 

/////// ricerca cliente tramite nome
if(!empty($nome)){
    $result = mysqli_query($conn,"SELECT * FROM `clienti` WHERE nome = '$nome'");
    while($row = mysqli_fetch_array($result)) 
    echo "<div class='myBox';><h3 style='color:black;'>" . "ID: " . $row['idCliente'] ."<br>". "cognome: " .  $row['cognome'] ."<br> "."nome: ". $row['nome'] ." <br>"."cellulare: ". $row['cellulare'] ."<br> "."residenza: ". $row['residenza'] .
    " <br>" . "comune: ". $row['comune'] ." <br>"."età: ". $row['eta'] ."</h3></div>";     
} 

/////// ricerca cliente tramite numero di cellulare
if(!empty($cellulare)){
    $result = mysqli_query($conn,"SELECT * FROM `clienti` WHERE cellulare = '$cellulare'");
    while($row = mysqli_fetch_array($result)) 
    echo "<div class='myBox';><h3 style='color:black ;'>" . "ID: " . $row['idCliente'] ."<br>". "cognome: " .  $row['cognome'] ."<br> "."nome: ". $row['nome'] ." <br>"."cellulare: ". $row['cellulare'] ."<br> "."residenza: ". $row['residenza'] .
    " <br>" . "comune: ". $row['comune'] ." <br>"."età: ". $row['eta'] ."</h3></div>";   
} 
?>

    
