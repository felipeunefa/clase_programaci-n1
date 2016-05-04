<?php  
require_once "conexion.php"; 

class facturacionM extends Conexion 
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
    
    public function get_count_facturacion() 
    { 
        $result = $this->_db->query('SELECT COUNT(*) as total FROM facturacion'); 
         
        $count_facturacion = $result->fetch_array(MYSQLI_ASSOC); 
         
        printf('<h3>Total de %d facturacion. </h3>',$count_facturacion['total']); 
    } 
} 
  ?> 