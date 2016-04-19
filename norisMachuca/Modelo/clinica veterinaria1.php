<?php  
require_once "conexion.php"; 
class clinica veterinaria1M extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 
    public function get_clinica veterinaria1() 
    { 
        $result = $this->_db->query('SELECT * FROM clinica veterinaria1'); 
         
        $clinica veterinaria1 = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $clinica veterinaria1; 
    } 
} 
  ?> 