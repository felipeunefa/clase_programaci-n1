<?php
require_once "conexion.php"; 

class SexoM extends Conexion {
    
    public function get_radio(){
        $result = $this->_db->query('select * from sexos where estado=1'); 
         
        $sexos = $result->fetch_all(MYSQLI_ASSOC);
        $radio='<div class="form-group">
                    <label >Sexo:</label>';
        foreach ($sexos as $row):
            $radio=$radio.'<div class="radio">
  <label><input type="radio" name="sexo" value="'.$row['id_sexo'].'">'.$row['nombre'].'</label>
</div>';
        endforeach;
        $radio=$radio.'</div>';
        echo $radio;
    }


} 
