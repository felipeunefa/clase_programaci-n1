<?php
require_once "conexion.php"; 

class NumfacturaM extends Conexion {
    
    public function get_radio(){
        $result = $this->_db->query('select * from numfactura where estado=1'); 
         
        $numfactura = $result->fetch_all(MYSQLI_ASSOC);
        $radio='<div class="form-group">
                    <label >numfactura:</label>';
        foreach ($numfactura as $row):
            $radio=$radio.'<div class="radio">
  <label><input type="radio" name="sexo" value="'.$row['nmfactura'].'">'.$row['fecha'].'</label>
</div>';
        endforeach;
        $radio=$radio.'</div>';
        echo $radio;
    }


} 