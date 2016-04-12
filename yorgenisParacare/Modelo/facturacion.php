<?php  
require_once "conexion.php"; 

class facturacion extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_facturacion() 
    { 
        $result = $this->_db->query('SELECT * FROM facturacion'); 
         
        $facturacion = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $facturacion; 
    } 
} 
  ?> 
