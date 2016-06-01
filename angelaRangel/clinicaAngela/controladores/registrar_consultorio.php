<?php 
require_once "../Modelo/consultorio.php";
$consultorioObj = new Consultorio();
$consultorioObj->registrar_consultorio($_POST);
?>
