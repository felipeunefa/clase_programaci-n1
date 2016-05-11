<?php  
require_once "conexion.php"; 

class FacturaM extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_factura() {
        $result = $this->_db->query('select 
                                    * from cliente  
                                     ')or die('Error de sql : '.$this->_db->error);
                                     
        
        $factura = $result->fetch_all(MYSQLI_ASSOC);
        return $factura ;
    }
	public function registrar_studiante($post){
         $nombre =strip_tags($post['nombre']);
         $cedula=strip_tags($post['cedula']);
         $direccion=strip_tags( $post['direccion']);
         $sexo=strip_tags($post['sexo']);
         $carrera=strip_tags( $post['carrera']);
         $fecha=strip_tags( $post['fecha']);
         $query="INSERT INTO estudiantes 
         (nombre, ci, fecha_nacimiento, direccion,id_sexos,id_carrera) 
         VALUES ('$nombre','$cedula','$fecha', '$direccion','$sexo','$carrera')";
        $exit=$this->_db->query($query) or die('Error de sql del metodo registrar_studiante: '.$this->_db->error);
        header('Location: ../Vista/registrar_estudiantes.php');
        } 
    public function get_count_factura() 
    { 
        $result = $this->_db->query('SELECT COUNT(*) as total FROM cliente'); 
         
        $count_cliente = $result->fetch_array(MYSQLI_ASSOC); 
         
        printf('<h3>Total de %d cliente Registrados. </h3>',$count_cliente['total']); 
    } 
} 
  ?> 
