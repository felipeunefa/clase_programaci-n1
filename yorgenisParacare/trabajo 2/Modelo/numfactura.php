<?php
require_once "conexion.php"; 

class NumfacturaM extends Conexion {
    
    public function get_radio(){
        $result = $this->_db->query('select * from numfactura where estado=1'); 
         
        $numfactura = $result->fetch_all(MYSQLI_ASSOC);
        $radio='<div class="form-group">
                    <label >numfactura:</label>'or die('Error de sql : '.$this->_db->error);
        foreach ($numfactura as $row):
            $radio=$radio.'<div class="radio">
  <label><input type="radio" name="sexo" value="'.$row['numfactura'].'">'.$row['fecha'].'</label>
</div>';
        endforeach;
        $radio=$radio.'</div>';
        echo $radio;
    }


} 
