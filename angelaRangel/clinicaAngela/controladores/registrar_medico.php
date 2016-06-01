<?php 
require_once "../Modelo/medicos.php";
$medicoObj = new Medicos();
$medicoObj->registrar_medico($_POST);
?>
