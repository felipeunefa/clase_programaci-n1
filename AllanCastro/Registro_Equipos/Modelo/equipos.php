<?php  
require_once "conexion.php"; 

class equiposM extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_equipos() 
    { 
        $result = $this->_db->query('SELECT * FROM equipos'); 
         
        $estudiantes = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $equipos; 
    } 
} 
  ?> 
