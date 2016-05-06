<?php
require_once "conexion.php"; 

class Carrera extends Conexion {
    
    public function get_select(){
        $result = $this->_db->query('select * from consulta where estado=1'); 
        $consultaData = $result->fetch_all(MYSQLI_ASSOC);
        $select='<div class="form-group">
                    <label for="sel1">consulta:</label>
                    <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-copyright-mark"></span></span>
                  <select class="form-control" id="sel1">
                  <option >Seleccione..</option>';
        foreach ($consultaData as $consulta):
            $select=$select. '<option value="'.$consulta['idconsulta'].'">'.$consulta['nombre'].'</option>';
        endforeach;
    $select=$select. '</select></div></div>';
    echo $select;
    }


} 

    
  
