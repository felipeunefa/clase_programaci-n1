<?php  
require_once "conexion.php"; 

class Casa extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_casa() 
    { 
        $result = $this->_db->query('SELECT c.*, p.nombrePropietario, s.nombreServicio, C.num_cuartos as caract
                                     FROM casa as c, propietarios as p, servicios as s, caracteristicas as C'); 
         
        $casa = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $casa; 
    } 
    public function registrar_casa($post){
         $nombre =strip_tags($post['nombrecasa']);
         $numero=strip_tags($post['numero']);
         $propietario=strip_tags( $post['propietario']);
         $servicio =strip_tags($post['servicio']);
         $caracteristicas=strip_tags( $post['caracteristicas']);
         $query="INSERT INTO casa 
         (nombreCasa, numero, id_propietario, id_servicio,id_caracteristicas) 
         VALUES ('$nombre','$numero','$propietario', '$servicio','$caracteristicas')";
        $exit=$this->_db->query($query) or die('Error de sql del metodo registrar_casa: '.$this->_db->error);
        header('Location: ../Vista/registrar_casa.php');
        } 
} 
  ?> 
