<?php
require_once "db.inc.php";
$idC = $_GET["idC"];
$cognC = $_GET["CognC"];
$nomC = $_GET["nomC"];
$celluC = $_GET["celluC"];
$resC = $_GET["resC"];
$comC = $_GET["ComC"];
$etaC = $_GET["etaC"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifica/aggiorna</title>
    <link rel="stylesheet" href="modificaClienteStyle.css">
</head>
<body>
    <h1>Modifica cliente</h1>

    <div class="container">
        <div class="myBox">
            <form action="modificaCliente.inc.php" method="POST">

                <input id = "nuovoId" name="nuovoId" value="<?php echo "$idC" ?>" type="text" readonly="readonly" >
                <label for="nuovoId">ID (fisso)</label>

                
                <input id = "nuovoCognome" name="nuovoCognome" value="<?php echo "$cognC" ?>" type="text">
                <label for="nuovoCognome">Cognome</label>

               
                <input id = "nuovoNome" name="nuovoNome" value="<?php echo "$nomC" ?>" type="text">
                <label for="nuovoNome">Nome</label>

                
                <input id = "nuovoCellulare" name="nuovoCellulare" value="<?php echo "$celluC" ?> "type="text">
                <label for="nuovoCellulare">Cellulare</label>
                
               
                <input id = "nuovaResidenza" name="nuovaResidenza" value="<?php echo "$resC" ?>" type="text">
                <label for="nuovaResidenza">Residenza</label>

                
                <input id = "nuovoComune" name="nuovoComune" value="<?php echo "$comC" ?>" type="text">
                <label for="nuovoComune">Comune</label>

                
                <input id = "nuovaEta" name="nuovaEta"  value="<?php echo "$etaC" ?>" type="text">
                <label for="nuovaEta">Età</label>
                
                <button onclick="alert('Cliente modificato con successo! ')"; type="submit">Modifica</button>
                <button onclick=vaiHome(); type="submit">Home</button>
            </form>
        </div>
    </div>



    <script>
        function vaiHome(){
        window.location.href = "index.php";
        }
</script>
    
</body>
</html>