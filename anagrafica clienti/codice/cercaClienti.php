<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerca un cliente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cercaClientiStyle.css">
</head>
<body>
    <h1>Cerca un cliente</h1>
    <div class="myBox">
        <form action="cercaClienti.inc.php" method="POST">

            <input id="searchById" name="searchById" type="number" placeholder="cerca per ID numerico" >
            <br>
            <input id="searchByCognome" name="searchByCognome" type="text" placeholder="cerca per cognome" >
            <br>
            <input id="searchByNome" name="searchByNome" type="text" placeholder="cerca per nome" >
            <br>
            <input id="searchByCell" name="searchByCell" type="text" placeholder="cerca per numero telefonico" >
            <br>
            <button class="button" type="submit" id="cercaClienteBtn" name="cercaClienteBtn">Cerca</button>
            <p class="button" onclick=vaiHome(); type="submit">Home</p>

            <script>
            function vaiHome(){
                window.location.href = "index.php";
            }
        </script>

        </form>

    </div>
</body>
</html>