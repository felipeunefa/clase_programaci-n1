<?php  
require_once "conexion.php"; 
class peluqueria4M extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 
    public function get_peluqueria4() 
    { 
        $result = $this->_db->query('select e.nombre as cliente,e.cedula,e.fecha_cita,e.telefono,e.id_cliente,s.descripcion as corte,c.direccion_salon as salon
                                    FROM cliente as e INNER JOIN corte s on e.id_corte= s.id_corte
                                    LEFT JOIN salon c ON e.id_salon=c.id_salon'); 
         
        $peluqueria4 = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $peluqueria4; 
    } 
	public function registro_atencion($post){
         $nombre =strip_tags($post['nombre']);
         $cedula=strip_tags($post['cedula']);
         $telefono=strip_tags( $post['telefono']);
         $fecha_cita=strip_tags($post['fecha_cita']);
         $corte=strip_tags( $post['corte']);
         $salon=strip_tags( $post['salon']);
         $query="INSERT INTO cliente
         (nombre, cedula, telefono, fecha_cita,id_corte,id_salon,id_empleada) 
         VALUES ('$nombre','$cedula','$telefono', '$fecha_cita','$corte','$salon','$empleada')";
        $exit=$this->_db->query($query) or die('Error de sql del metodo registrar_atencion: '.$this->_db->error);
        header('Location: ../Vista/registrar_clientes.php');
        } 
    
    public function get_count_peluqueria4() 
    { 
        $result = $this->_db->query('SELECT COUNT(*) as total FROM cliente'); 
         
        $count_peluqueria4 = $result->fetch_array(MYSQLI_ASSOC); 
         
        printf('<center><h3>Total de %d clientes Registrados. </h3></center>',$count_peluqueria4['total']); 
    } 
} 
  ?> 