<?php  
require_once "conexion.php"; 

class PacientesM extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_pacientes() 
    { 
        $result = $this->_db->query('select e.nombre as estudiante,e.ci,e.direccion,e.fecha_nacimiento,e.id_estudiantes, s.nombre as sexo,c.nombre as carrera
                                    FROM estudiantes as e INNER JOIN sexos s on e.id_sexos= s.id_sexo 
                                    LEFT JOIN carreras c ON e.id_carrera=c.id_carrera'); 
         
        $estudiantes = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $estudiantes; 
    } 
    public function registrar_Pacientes($post){
         $cedula=strip_tags($post['cedula']);
         $primerNombre =strip_tags($post['nombre']);
         $primerApellido=strip_tags($post['apellido']);$direccion=strip_tags( $post['direccion']);
         $sexo=strip_tags($post['sexo']);
         $fechaNacimiento=strip_tags( $post['fecha']);
         $telefono=strip_tags( $post['telefono']);
         $query="INSERT INTO pacientes 
         (cedula, primerNombre, primerApellido, sexo, fechaNacimiento,telefono) 
         VALUES ('$nombre','apellido', $cedula','$fecha','$sexo','$telefono')";
        $exit=$this->_db->query($query) or die('Error de sql del metodo registrar_Pacientes: '.$this->_db->error);
        header('Location: ../Vista/registrar_Pacientes.php');
        } 
    public function get_count_Pacientes()
    { 
        $result = $this->_db->query('SELECT COUNT(*) as total FROM Pacientes'); 
         
        $count_pacientes = $result->fetch_array(MYSQLI_ASSOC); 
         
        printf('<h3>Total de %d Pacientes Registrados. </h3>',$count_Pacientes ['total']); 
    } 
} 
  ?> 