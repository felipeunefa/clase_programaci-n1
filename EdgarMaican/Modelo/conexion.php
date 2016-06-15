<?php  
require_once "../config.php"; 

class Conexion 
{ 
    protected $_registro_militar; 

    public function __construct() 
    { 
        $this->_registro_militar = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); 

        if ( $this->_registro_militar->connect_errno ) 
        { 
            echo "Fallo al conectar a MySQL: ". $this->_registro_militar->connect_error; 
            return;     
        } 

        $this->_registro_militar->set_charset(DB_CHARSET); 
    } 
} 
?> 
