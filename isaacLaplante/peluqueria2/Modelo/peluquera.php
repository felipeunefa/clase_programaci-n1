<?php
require_once "conexion.php"; 
class peluqueraM extends Conexion {
    
    public function get_radio(){
        $result = $this->_db->query('select * from peluquera where enlace=1'); 
         
        $peluquera = $result->fetch_all(MYSQLI_ASSOC);
        $radio='<div class="form-group">
                    <label >Peluqueras:</label>';
        foreach ($peluquera as $row):
            $radio=$radio.'<div class="radio">
  <label><input type="radio" name="peluquera" value="'.$row['id_peluquera'].'">'.$row['nombre_peluquera'].'</label>
</div>';
        endforeach;
        $radio=$radio.'</div>';
        echo $radio;
    }
} 
    