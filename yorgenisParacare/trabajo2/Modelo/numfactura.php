<?php
require_once "conexion.php"; 

class NumfacturaM extends Conexion {
    
    public function get_radio(){
        $result = $this->_db->query('select * from numfactura where estado=1'); 
         
        $numfacturadata = $result->fetch_all(MYSQLI_ASSOC);
        $radio='<div class="form-group">
                    <label >numfactura:</label>';
        foreach ($numfacturadata as $row):
            $radio=$radio.'<div class="radio">
  <label><input type="radio" name="Tipo_de_factura" value="'.$row['id_numfactura'].'">'.$row['Tipo_de_factura'].'</label>
</div>';
        endforeach;
        $radio=$radio.'</div>';
        echo $radio;
    }


} 
