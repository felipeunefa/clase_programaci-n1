<?php  
require_once "conexion.php"; 
class peluqueria2M extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 
    public function get_peluqueria2() 
    { 
        $result = $this->_db->query('SELECT * FROM peluqueria2'); 
         
        $peluqueria2 = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $peluqueria2; 
    } 
} 
  ?> 