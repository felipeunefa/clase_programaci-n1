<?php
require_once "conexion.php"; 
class EmpleadaM extends Conexion {
   
    public function get_radio(){
        $result = $this->_db->query('select * from empleada where enlace=1'); 
         
        $empleada = $result->fetch_all(MYSQLI_ASSOC);
        $radio='<div class="form-group">
                    <label >Empleada:</label>';
        foreach ($empleada as $row):
            $radio=$radio.'<div class="radio">
  <label><input type="radio" name="empleada" value="'.$row['id_empleada'].'">'.$row['nombre_empleada'].'</label>
</div>';
        endforeach;
        $radio=$radio.'</div>';
        echo $radio;
    }
} 