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
        $result = $this->_db->query('select e.nombre as estudiante,e.ci,e.direccion,e.fecha_nacimiento,e.id_estudiantes, s.nombre as sexo,c.nombre as carrera
                                    FROM estudiantes as e INNER JOIN sexos s on e.id_sexos= s.id_sexo 
                                    LEFT JOIN carreras c ON e.id_carrera=c.id_carrera'); 
         
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
