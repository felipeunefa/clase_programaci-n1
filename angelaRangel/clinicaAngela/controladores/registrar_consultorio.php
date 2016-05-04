<?php 
require_once "../Modelo/consultorio.php";
$consultorioObj = new consultorioM();
$consultorioObj->registrar_consultorio($_POST);
?>
