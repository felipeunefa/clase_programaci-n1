<?php
require_once 'config/config.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion
 *
 * @author javier
 */

class Conexion {
    
    protected $_db;
    
    public function __construct() {
        
        $this->_db = new mysqli(DB_host, DB_user, DB_pass, DB_name);
        
            if($this->_db->connect_errno)
            {
                echo 'Fallo al conectar a MySQL'. $this->_db->connect_error;
                return;
            }
            $this->_db->set_charset(DB_charset);
    }

            
}
