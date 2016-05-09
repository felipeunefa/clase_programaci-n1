<?php  
require_once "conexion.php"; 

class FacturaM extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_factura() {
        $result = $this->_db->query('select 
                                    * from cliente  
                                     ')or die('Error de sql : '.$this->_db->error);
                                     
        
        $factura = $result->fetch_all(MYSQLI_ASSOC);
        return $factura ;
    }
    public function get_count_factura() 
    { 
        $result = $this->_db->query('SELECT COUNT(*) as total FROM cliente'); 
         
        $count_cliente = $result->fetch_array(MYSQLI_ASSOC); 
         
        printf('<h3>Total de %d cliente Registrados. </h3>',$count_cliente['total']); 
    } 
} 
  ?> 
