<?php  
require_once "conexion.php"; 

class equiposM extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_equipos() 
    {         
        $result = $this->_db->query('SELECT m.nombre, p.descripcion, c.modelo, c.serie,c.id_computadora
                        FROM Computadoras as c INNER JOIN Marca as m on c.id_marca= m.id_marca
                        LEFT JOIN Perisferico as p ON c.id_perfisferico= p.id_perfisferico'); 
         
        $equipos = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $equipos; 
    }
    
    public function registrar_maquina($post){
        $marca = strip_tags($post['marca']);
        $modelo=strip_tags($post['modelo']);
        $serie=strip_tags( $post['serie']);
        $perisferico=strip_tags( $post['perisferico']);        
        $query="INSERT INTO Computadoras
        (id_marca,modelo,serie,id_perfisferico)
        VALUES('$marca','$modelo','$serie','$perisferico')";
        $exit=$this->_db->query($query) or die('Error de sql del metodo registrar_maquina: '.$this->_db->error);
        header('Location: ../Vista/registrar_equipos.php');
    }

    public function get_count_equipos() 
    { 
        $result = $this->_db->query('SELECT COUNT(*) as total FROM Computadoras'); 
         
        $count_equipos = $result->fetch_array(MYSQLI_ASSOC); 
         
        printf('<h3>Total de %d Equipos Registrados. </h3>',$count_equipos['total']); 
    }
} 
  ?> 
