<?php
require_once "conexion.php"; 

class Servicios extends Conexion {
    
    public function get_select(){
        $result = $this->_db->query('select * from servicios where estado=1'); 
        $servicioData = $result->fetch_all(MYSQLI_ASSOC);
        $select='<div class="form-group">
                    <label for="sel1">Servicio:</label>
                    <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-copyright-mark"></span></span>
                  <select class="form-control" name="servicio" id="sel1">
                  <option >Seleccione..</option>';
        foreach ($servicioData as $servicio):
            $select=$select. '<option value="'.$servicio['id_servicios'].'">'.$servicio['nombreServicio'].'</option>';
        endforeach;
    $select=$select. '</select></div></div>';
    echo $select;
    }


} 

    
  
