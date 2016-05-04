<?php 
require_once "../Modelo/peluqueria4.php";
$peluqueria4Obj = new peluqueria4M();
$peluqueria4Obj->registro_atencion($_POST);
?>