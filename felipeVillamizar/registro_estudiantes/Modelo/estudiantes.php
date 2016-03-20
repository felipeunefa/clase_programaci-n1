<?php  
require_once "conexion.php"; 

class estudiantesM extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_estudiantes() 
    { 
        $result = $this->_db->query('SELECT * FROM estudiantes'); 
         
        $estudiantes = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $estudiantes; 
    } 
} 
  ?> 
