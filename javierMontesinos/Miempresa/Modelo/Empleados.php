<?php
require_once 'Conexion.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of empleados
 *
 * @author javier
 */
class Empleados extends Conexion {
    //atributos
    
    
    
    //metodos
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getEmpleados() {
        $result = $this->_db->query('SELECT E.*, S.nombreSexo, s.montoSalario, C.nombreCargo, D.nombreDep
                                     FROM  Empleados as E, sexo as S, salario as s, Cargos as C, Departamento as D
                                     where S.id_sexo = E.id_sexo AND C.id_cargo = E.id_cargo AND D.id_departamento = E.id_dep');
        
        $empleados = $result->fetch_all(MYSQLI_ASSOC);
        
        return $empleados;
    }
    
    public function getCountEmpleados() {
        
        $result = $this->_db->query('SELECT COUNT(*) as total FROM Empleados'); 
         
        $count_empleados = $result->fetch_array(MYSQLI_ASSOC); 
         
        printf("<span class='badge'>".$count_empleados['total']."</span>"); 
        
    }
    public function setEmpleados($post) {
        
         if(isset($post) != NULL){
            $nombre =strip_tags($post['nombre']);
            $apellido =strip_tags($post['apellido']);
            $cedula=strip_tags($post['cedula']);
            $fecha=strip_tags( $post['nacimiento']);
            $sexo=strip_tags($post['sexo']);
            $cargo=strip_tags( $post['cargo']);
            $dep=strip_tags( $post['dep']);
            $salario=strip_tags( $post['salario']);
            $query="INSERT INTO Empleados 
            (nombreEmpleado, apellidoEmpleado, cedulaEmpleado, fecha_nacimiento, id_cargo, id_sexo, id_salario, id_dep) 
            VALUES ('$nombre','$apellido','$cedula','$fecha', '$cargo',  '$sexo', '$salario', '$dep')";
           $exit=$this->_db->query($query) or die('Error de sql del metodo setEmpleados: '.$this->_db->error);
           header('Location: ../Vista/index.php');
         }
                  
    }
    public function updateEmpleados() {
        
    }
}
