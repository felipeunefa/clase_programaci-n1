<?php  
require_once "conexion.php"; 

class casa extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_casa() 
    { 
        $result = $this->_db->query('SELECT * FROM casa'); 
         
        $casa = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $casa; 
    } 
} 
  ?> 
