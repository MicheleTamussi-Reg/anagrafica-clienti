<?php
if (isset($_SESSION['id'])){ // se l'id di sessione è gia settato rimando l'utente alla pagine principale
    header("location: index.php"); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <title>Effetua il login</title>

</head>
<body>
    <div class="myBox">
        <div class="form">
            <h1 class="titolo">Login</h1>
            <form action = "login.inc.php" method="POST">

                <input class="inputBx" type="text" name="username"  id="username" placeholder="inserisci nome utente" required>
                
                <input class="inputBx"  type="password" name="pw" id="pw" placeholder="inserisci password" required>
                
                <button class="button" style="margin-top: 35px"  type="submit" name="submit" id="submit">Accedi</button>
                
            </form>
        </div>
    </div>
      
</body>
</html>