<?php
require_once "db.inc.php";
$idClienteCanc = $_GET["idClienteCanc"];

$query = "DELETE FROM `clienti` WHERE `clienti`.`idCliente` = '$idClienteCanc'";

$result = mysqli_query($conn,$query);
header("location: index.php");
?>