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
        $result = $this->_db->query('Select * FROM consutorio ');
         
        $consultorio = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $consultorio; 
    } 
    
   public function registrar_consultorio($post){
         $nombre =strip_tags($post['nombre']);
         $direccion=strip_tags( $post['direccion']);
         $rif = strip_tags($post['rif']);
         $encargado = strip_tags($post['encargado']);
         $query="INSERT INTO consutorio 
         (nombre, direccion, rif, encargado) 
         VALUES ('$nombre','$direccion','$rif','$encargado')";
        $exit=$this->_db->query($query) or die('Error de sql del metodo registrar_consultorio: '.$this->_db->error);
        header('Location: ../Vista/registrar_consultorio.php');
        } 
    public function get_count_consultorio() 
    { 
        $result = $this->_db->query('SELECT COUNT(*) as total FROM consutorio'); 
         
        $count_consultorio = $result->fetch_array(MYSQLI_ASSOC); 
         
        printf('<h3>Total de %d Consultoriod Registrados. </h3>',$count_consultorio['total']); 
    } 
} 
  ?> 
    