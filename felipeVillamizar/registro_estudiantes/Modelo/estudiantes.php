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
    
    public function get_count_estudiantes() 
    { 
        $result = $this->_db->query('SELECT COUNT(*) as total FROM estudiantes'); 
         
        $count_estudiantes = $result->fetch_array(MYSQLI_ASSOC); 
         
        printf('<h3>Total de %d estudiantes Registrados. </h3>',$count_estudiantes['total']); 
    } 
} 
  ?> 
