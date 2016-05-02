<?php  
require_once "conexion.php"; 

class facturacionM extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_facturacion() 
    { 
        $result = $this->_db->query('select e.id_cliente as nit,e.ci,e.Nombre,e.apellido,e.Direccion,e.Telefono, 
                                    FROM estudiantes as e INNER JOIN sexos s on e.id_sexos= s.id_sexo 
                                    LEFT JOIN carreras c ON e.id_carrera=c.id_carrera'); 
         
        $cliente = $result->fetch_array(MYSQLI_ASSOC); 
         
        return $cliente; 
    } 
    
    public function get_count_facturacion() 
    { 
        $result = $this->_db->query('SELECT COUNT(*) as total FROM cliente'); 
         
        $count_cliente = $result->fetch_array(MYSQLI_ASSOC); 
         
        printf('<h3>Total de %d Facturas Registradas. </h3>',$count_cliente['total']); 
    } 
} 
  ?> 
