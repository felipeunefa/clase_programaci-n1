<?php
require_once "conexion.php"; 

class Carrera extends Conexion {
    
    public function get_select(){
        $result = $this->_db->query('select * from nacionalidad where estado=1'); 
        $nacionalidadData = $result->fetch_all(MYSQLI_ASSOC);
        $select='<div class="form-group">
                    <label for="sel1">nacionalidad:</label>
                    <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-copyright-mark"></span></span>
                  <select class="form-control" id="sel1">
                  <option >Seleccione..</option>';
        foreach ($carreraData as $nacionalidad):
            $select=$select. '<option value="'.$nacionalidad['id_nacionalidad'].'">'.$nacionalidad['nombre'].'</option>';
        endforeach;
    $select=$select. '</select></div></div>';
    echo $select;
    }


} 

    
  
