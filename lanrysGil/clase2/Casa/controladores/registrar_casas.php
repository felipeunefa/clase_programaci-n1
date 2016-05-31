<?php 
require_once "../Modelo/casa.php";
$casaObj = new Casa();
$casaObj->registrar_casa($_POST);
?>
