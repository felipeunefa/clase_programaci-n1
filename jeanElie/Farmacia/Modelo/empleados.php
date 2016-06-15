<?php
require_once "conexion.php"; 
class EmpleadosM extends Conexion {
    
    public function get_select(){
        $result = $this->_db->query('select * from empleados'); 
        
		$empleadosData = $result->fetch_all(MYSQLI_ASSOC);
        $select='<div class="form-group">
                    <label for="sel1">Empleado:</label>
                    <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                  <select class="form-control" name="empleado" id="sel1">
                  <option >Seleccione..</option>';
        foreach ($empleadosData as $empleados):
            $select=$select. '<option value=" '.$empleados['id_empleado'].'">'.$empleados['nombre_empleado'].'</option>';
        endforeach;
    $select=$select. '</select></div></div>';
    echo $select;
    }
} 
