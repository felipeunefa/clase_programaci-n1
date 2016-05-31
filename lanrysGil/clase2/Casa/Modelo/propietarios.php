<?php
require_once "conexion.php"; 

class Propietarios extends Conexion {
    
    public function get_select(){
        $result = $this->_db->query('select * from propietarios where estado=1'); 
        $propietarioData = $result->fetch_all(MYSQLI_ASSOC);
        $select='<div class="form-group">
                    <label for="sel1">Propietario:</label>
                    <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-copyright-mark"></span></span>
                  <select class="form-control" name="propietario" id="sel1">
                  <option >Seleccione..</option>';
        foreach ($propietarioData as $propietario):
            $select=$select. '<option value="'.$propietario['id_propietario'].'">'.$propietario['nombrePropietario'].'</option>';
        endforeach;
    $select=$select. '</select></div></div>';
    echo $select;
    }


} 

    
  
