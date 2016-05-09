<?php 
require_once "../Modelo/equipos.php";
$equiposObj = new equiposM();
$equiposObj->registrar_equipo($_POST);
?>