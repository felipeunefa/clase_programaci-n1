<?php  
require_once "conexion.php"; 

class Consultorio extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_consultorio() 
    { 
        $result = $this->_db->query('SELECT * FROM consultorio'); 
         
        $consultorio = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $consultorio; 
    } 
    
    public function get_count_consultorio() 
    { 
        $result = $this->_db->query('SELECT COUNT(*) as total FROM consultorio'); 
         
        $count_consultorio = $result->fetch_array(MYSQLI_ASSOC); 
         
        printf('<h3>Total de %d consultorio. </h3>',$count_consultorio['total']); 
    } 
} 
  ?> 
