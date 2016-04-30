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
    public function setEmpleados() {
        
        if ( !empty($_GET["como"]) && is_array($_GET["como"]) ) { 
            echo "<ul>";
            foreach ( $_GET["como"] as $como ) { 
                    echo "<li>";
                    echo $como; 
                    echo "</li>"; 
             }
             echo "</ul>";
        }
        $insert = $this->_db->query('INSERT INTO Empleados (id_empleado, nombreEmpleado, apellidoEmpleado, cedulaEmpleado, fecha_nacimiento, id_cargo, id_sexo, id_salario, id_dep) '
                . '                  VALUES (NULL, Juan, Perez, 16144378, 1991-01-10, 1, 2, 1, 2)');
        
    }
}
