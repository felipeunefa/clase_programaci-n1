<?php  
require_once "conexion.php"; 

class FacturaM extends Conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

    public function get_factura() {
        $result = $this->_db->query('SELECT `cliente`.`id_cliente`, `cliente`.`Nombre`, `cliente`.`Apellido`, `cliente`.`Cedula`, `cliente`.`Direccion`, `cliente`.`telefono`, `detalles_de_factura`.`producto`, `numfactura`.`Tipo_de_factura` 
		FROM `cliente` LEFT JOIN `detalles_de_factura` ON `detalles_de_factura`.`id_detalles_de_factura` = `cliente`.`Id_detalle_de_factura` 
		LEFT JOIN `numfactura` ON `numfactura`.`id_numfactura` = `cliente`.`id_numfactura')or die('Error de sql : '.$this->_db->error);
                                     
        
        $factura = $result->fetch_all(MYSQLI_ASSOC);
        return $factura ;
    }
	public function registrar_facturas($post){
         $Nombre =strip_tags($post['Nombre']);
         $Apellido=strip_tags($post['Apellido']);
         $Cedula=strip_tags( $post['Cedula']);
         $Direccion=strip_tags($post['Direccion']);
         $Telefono=strip_tags( $post['Telefono']);
         
		 
         $query="INSERT INTO cliente 
         (Nombre,Apellido,Cedula,Direccion,Direccion,Telefono,Id_detalle_de_factura,id_numfactura) 
         VALUES ('$Nombre','$Apellido','$Cedula', '$direccion','$Telefono')";
        $exit=$this->_db->query($query) or die('Error de sql del metodo registrar_factura: '.$this->_db->error);
        header('Location: ../Vista/Registrar facturas.php');
        } 
    public function get_count_factura() 
    { 
        $result = $this->_db->query('SELECT COUNT(*) as total FROM cliente'); 
         
        $count_cliente = $result->fetch_array(MYSQLI_ASSOC); 
         
        printf('<h3>Total de %d cliente Registrados. </h3>',$count_cliente['total']); 
    } 
} 
  ?> 
