<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>lista clienti</title>
        <link rel="stylesheet" href="listaClientiStyle.css">
    </head>
    <body style="background-color: #4DB3B3;">
     <table id="tabella">
         <tr>
             <th>id cliente</th>
             <th>cognome</th>
             <th>nome</th>
             <th>cellulare</th>
             <th>residenza</th>
             <th>comune</th>
             <th>età</th>
             <th colspan="2">azione</th>
         </tr>

         <button onclick="vaiHome();" class="button">Home</button>
         <br>
         <style>
                .button {
            background-color: white; 
            border:  3px solid #E6772E;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            border-radius: 10%;
            margin-bottom: 1%;
            margin-top: 0%;
            
        }
        .button:hover{
            background-color: #E6772E;

        }
        </style>

         <script>
            function vaiHome(){
            window.location.href = "index.php";
            }
        </script>

    </body>
    </html>
<?php
    require_once "db.inc.php";
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        if (isset($_POST["filtroBtn"])){
            $comune = mysqli_real_escape_string($conn,($_POST["filtroComune"])); ///// estrazione valori dei possibili filtri dal form
            $eta = mysqli_real_escape_string($conn,($_POST["filtroEta"]));
    }
}

//mostra in tabella tutta la tabella clienti
 
if (empty($comune) && empty($eta) && empty($nome)){
    $query = "SELECT * FROM clienti";
    if ($result = $conn->query($query)){
        while($row = $result->fetch_assoc()){
            echo "<tr><td>".$row['idCliente']."</td><td>". $row["cognome"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["cellulare"] . "</td><td>" . $row["residenza"]
        ."</td><td>".  $row["comune"] . "</td><td>".  $row["eta"] . 
        "</td>"."<td><a href = 'cancellaCliente.php?idClienteCanc=$row[idCliente]' onclick= alert('sicuro di voler cancellare il cliente?');>Cancella</td>" . 
        "<td><a href = 'modificaCliente.php?idC=$row[idCliente]&CognC=$row[cognome]&nomC=$row[nome]&celluC=$row[cellulare]&resC=$row[residenza]&ComC=$row[comune]&etaC=$row[eta]'
         onclick= 'return checkDelete()'>Modifica</td>";

        }
        echo"</table>";
        
    }
    else{
        echo"0 risultati trovati";
        }

        }
 

// filtri di visualizzazione lista clienti
    
if(!empty($comune)){
    $queryComune = "SELECT * FROM clienti WHERE clienti.comune = '$comune'";
    if ($result = $conn->query($queryComune)){
        while($row = $result->fetch_assoc()){
            echo "<tr><td>".$row['idCliente']."</td><td>". $row["cognome"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["cellulare"] . "</td><td>" . $row["residenza"]
        ."</td><td>".  $row["comune"] . "</td><td>".  $row["eta"] . 
        "</td>"."<td><a href = 'cancellaCliente.php?idClienteCanc=$row[idCliente]' onclick= alert('sicuro di voler cancellare il cliente?');>Cancella</td>" . 
        "<td><a href = 'modificaCliente.php?idC=$row[idCliente]&CognC=$row[cognome]&nomC=$row[nome]&celluC=$row[cellulare]&resC=$row[residenza]&ComC=$row[comune]&etaC=$row[eta]'
         onclick= 'return checkDelete()'>Modifica</td>";



        }
        echo"</table>";   
    }
}
if (!empty($eta)){
    $queryEta = "SELECT * FROM clienti WHERE clienti.eta = '$eta'";
    if ($result = $conn->query($queryEta)){
        while($row = $result->fetch_assoc()){
            echo "<tr><td>".$row['idCliente']."</td><td>". $row["cognome"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["cellulare"] . "</td><td>" . $row["residenza"]
        ."</td><td>".  $row["comune"] . "</td><td>".  $row["eta"] . 
        "</td>"."<td><a href = 'cancellaCliente.php?idClienteCanc=$row[idCliente]' onclick= alert('sicuro di voler cancellare il cliente?');>Cancella</td>" . 
        "<td><a href = 'modificaCliente.php?idC=$row[idCliente]&CognC=$row[cognome]&nomC=$row[nome]&celluC=$row[cellulare]&resC=$row[residenza]&ComC=$row[comune]&etaC=$row[eta]'
         onclick= 'return checkDelete()'>Modifica</td>";

        }
        echo"</table>";   
    }

}
?>