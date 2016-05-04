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
        $result = $this->_db->query('SELECT *, nombrePropietario, nombreServicio, num_cuartos as caract
                                     FROM casa, propietarios, servicios, caracteristicas'); 
         
        $casa = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $casa; 
    } 
} 
  ?> 
