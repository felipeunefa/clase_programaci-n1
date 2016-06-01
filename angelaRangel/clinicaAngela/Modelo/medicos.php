<?php  
require_once "conexion.php"; 

class Medicos extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_consultorio() 
    { 
        $result = $this->_db->query('Select * FROM medico ');
         
        $consultorio = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $consultorio; 
    } 
    
   public function registrar_medico($post){
         $nombre = strip_tags($post['nombreMedico']);
         $cedula = strip_tags( $post['cedulaMedico']);
         $msas = strip_tags($post['msas']);
         $telefono = strip_tags($post['telefono']);
         $query="INSERT INTO medico 
         (nombreMedico, cedulaMedico, msas, telefono) 
         VALUES ('$nombre','$cedula','$msas','$telefono')";
        $exit=$this->_db->query($query) or die('Error de sql del metodo registrar_medico: '.$this->_db->error);
        header('Location: ../Vista/registrar_medicos.php');
        } 

} 
  ?> 
    
