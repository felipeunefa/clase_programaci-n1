<?php  
require_once "conexion.php"; 

class farmaciaM extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_farmacia() 
    { 
        $result = $this->_db->query('SELECT `clientes`.`id_cliente`, `clientes`.`nombre`, `clientes`.`cedula`, `clientes`.`telefono`, `empleados`.`nombre_empleado` FROM `clientes` LEFT JOIN `empleados` ON `empleados`.`id_empleado` = `clientes`.`id_empleado`' ); 
         
        $farmacia = $result->fetch_all(MYSQLI_ASSOC); 
         
         return $farmacia; 
    }

    public function registrar_cliente($post){
         $nombre =strip_tags($post['name']);
         $cedula=strip_tags($post['cedula']);
         $telefono=strip_tags( $post['telefono_del_cliente']);
         $empleado=strip_tags( $post['empleado']);
         $query="INSERT INTO clientes 
         (nombre, cedula, telefono, id_empleado) 
         VALUES ('$nombre','$cedula','$telefono', '$empleado')";
        $exit=$this->_db->query($query) or die('Error de sql del metodo registrar_cliente: '.$this->_db->error);
        header('Location: ../Vista/registrar_cliente.php');
        }  
    
    public function get_count_farmacia() 
    { 
        $result = $this->_db->query('SELECT COUNT(*) as total FROM clientes'); 
         
        $count_farmacia = $result->fetch_array(MYSQLI_ASSOC); 
         
        printf('<h3>Total de %d cliente Registrado. </h3>',$count_farmacia['total']); 
    } 
} 
  ?> 
