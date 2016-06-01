<?php 
require_once "../Modelo/farmacia.php";
$farmaciaObj = new farmaciaM();
$farmaciaObj->registrar_cliente($_POST);
?>
