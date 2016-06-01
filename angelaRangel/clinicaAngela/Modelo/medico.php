<?php
require_once "conexion.php"; 

class Medico extends Conexion {
    
    public function get_radio(){
        $result = $this->_db->query('select * from medico'); 
         
        $medico = $result->fetch_all(MYSQLI_ASSOC);
        $radio='<div class="form-group">
                    <label >Medico:</label>';
        foreach ($medico as $row):
            $radio=$radio.'<div class="radio">
  <label><input type="radio" name="medico" value="'.$row['idmedico'].'">'.$row['nombreMedico'].'</label>
</div>';
        endforeach;
        $radio=$radio.'</div>';
        echo $radio;
    }

} 
