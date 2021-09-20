<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listaClientiStyle.css">
    <title>Visualizza modifica e cancella</title>
</head>
<body>
<h1 style="text-align: center;">Filtra la tabella clienti</h1>


</head>
<body id="bodyLista">

<div class="myBox">
<form action="listaClienti.inc.php" method="post">
    <div class="dropdown">
    <h2 onclick="myFunction()" class="dropbtn">Seleziona filtri</h2>
    <div id="myDropdown" class="dropdown-content">
        <input id="filtroComune" name="filtroComune" class="inListaClienti" type="text" placeholder="filtra per comune di appartenenza">
        <input id="filtroEta" name="filtroEta" class="inListaClienti" type="number" placeholder="filtra per età">
    </div>
    </div>
    <button type="submit" id="filtroBtn" name="filtroBtn" class="button">cerca</button>
    <style>
        #filtroBtn {
    background-color: white; 
    border:  3px solid #E6772E;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    border-radius: 10%;
    
  }
  #filtroBtn:hover{
    background-color: #E6772E;

  }
    </style>
    <h2 onclick="vaiHome();" class="button">Home</h2>
<style>
    .button {
  background-color: white; 
  border:  3px solid #E6772E;
  color: black;
  padding: 15px 32px;
  text-decoration: none;
  font-size: 16px;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: bold;
  border-radius: 10%;
  margin-top: 15%;
  
}
.button:hover{
  background-color: #E6772E;

}
</style>
</form>

</div>


<script>
function vaiHome(){
    window.location.href = "index.php";
}
</script>

<script>

    function myFunction() {
     document.getElementById("myDropdown").classList.toggle("show");
    }

</script>

  
</body>
</html>
