<?php  
require_once "conexion.php"; 

class FacturaM extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_Factura() {
        $result = $this->_db->query('select e.nombre as cliente,e.apellido,e.direccion,e.telefon,e.Id_cliente, s.co_producto as detalle_factura,c.fecha as factura
                                    FROM cliente as e INNER JOIN detalle_factura s on e.dealle_factura= s.detalle_factura 
                                    LEFT JOIN factura c ON e.numfactura=c.numfactura');
                                     
        
        $factura = $result->fetch_all(MYSQLI_ASSOC);
        return $factura;
    }
    public function get_count_factura() 
    { 
        $result = $this->_db->query('SELECT COUNT(*) as total FROM factura'); 
         
        $count_factura = $result->fetch_array(MYSQLI_ASSOC); 
         
        printf('<h3>Total de %d Facturas Registrados. </h3>',$count_factura['total']); 
    } 
} 
  ?> 
