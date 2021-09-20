<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi cliente</title>
    <link rel="stylesheet" href="nuovoClienteStyle.css">
</head>
<body>
    <h1>Registra un nuovo cliente</h1>

    <div class="myBox">
    <div class="container">
        <form action="nuovoCliente.inc.php" method="POST">
    
            <input type="text" name="cognome" id="cognome" placeholder="cognome" required>
        
            <input type="text" name="nome" id="nome" placeholder="nome" required>
            
            <input type="text" name="cellulare" id="cellulare" placeholder="cellulare" required>

            <input type="text" name="residenza" id="residenza" placeholder="residenza"required >
        
            <input type="text" name="comune" id="comune" placeholder="comune" required >
        
            <input type="number" name="eta" id="eta" placeholder="età" required >
            <br>
        
            <button onclick="alert('Cliente aggiunto con successo al database')"; class="button" type="submit" name="salvaNuovoClienteBTn" id="salvaNuovoClienteBtn">Salva</button>
            <button onclick="vaiHome();" class="button">Home</button>
        </form>
    </div>

</div>

    
</body>

<script>
function vaiHome(){
    window.location.href = "index.php";
}
</script>
</html>