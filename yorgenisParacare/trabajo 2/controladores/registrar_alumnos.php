<?php 
require_once "../Modelo/estudiantes.php";
$estudiantesObj = new estudiantesM();
$estudiantesObj->registrar_studiante($_POST);
?>
