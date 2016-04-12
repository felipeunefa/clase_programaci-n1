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
class empleados extends Conexion {
    //atributos
    
    
    
    //metodos
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getEmpleados() {
        $result = $this->_db->query('SELECT * FROM Empleados');
        
        $empleados = $result->fetch_all(MYSQLI_ASSOC);
        
        return $empleados;
    }
}
