<?php 
require_once "../Modelo/facturacion.php";
$facturasObj = new FacturaM();
$facturasObj->registrar_facturas($_POST);
?>
