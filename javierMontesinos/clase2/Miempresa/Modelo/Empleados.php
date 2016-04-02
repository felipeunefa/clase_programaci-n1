<?php
require_once 'conexion.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empleados
 *
 * @author javier
 */
class Empleados extends Conexion {
    
    //atributos
    public $nombre;
    public $apellido;
    public $cedula;
    public $nacimiento;


    //metodos
    public function __construct() {
        parent::__construct();
        
    }
    public function get_Empleados()
    {
        $result = $this->_db->query('SELECT * from  Empleados');
        $empleados = $result->fetch_all(MYSQLI_ASSOC);
        return $empleados;
    }


    
}
