<?php
require_once "conexion.php"; 

class Detalle_de_factura extends Conexion {
    
    public function get_select(){
        $result = $this->_db->query('select * from detalle de factura where estado=1'); 
        $detalleData = $result->fetch_all(MYSQLI_ASSOC);
        $select='<div class="form-group">
                    <label for="sel1">detalle de factura:</label>
                    <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-copyright-mark"></span></span>
                  <select class="form-control" name="detalle de factura" id="sel1">
                  <option >Seleccione..</option>';
        foreach ($detalleData as $detalle_de_factura):
            $select=$select. '<option value="'.$detalle_de_factura['detalle_factura'].'">'.$detalle_de_factura['co_producto'].'</option>';
        endforeach;
    $select=$select. '</select></div></div>';
    echo $select;
    }


} 

    
  
