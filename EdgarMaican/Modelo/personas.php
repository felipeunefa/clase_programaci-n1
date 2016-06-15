<?php  
require_once "conexion.php"; 

class personasM extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_personas() 
    { 
        $result = $this->_registro_militar->query('select p.nombre as persona,p.cedula,p.direccion,p.fecha_nacimiento,p.id_persona, s.nombre as sexo,c.nombre as nacionalidad
                                    FROM personas as e INNER JOIN sexos s on p.id_sexo= s.id_sexo 
                                    LEFT JOIN nacionalidad c ON p.id_nacionalidad=c.id_nacionalidad'); 
         
        $personas = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $personas; 
    } 
    
    public function get_count_personas() 
    { 
        $result = $this->_registro_militar->query('SELECT COUNT(*) as total FROM personas'); 
         
        $count_personas = $result->fetch_array(MYSQLI_ASSOC); 
         
        printf('<h3>Total de %d personas Registrados. </h3>',$count_personas['total']); 
    } 
} 
  ?> 
