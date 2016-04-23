<?php
require_once "conexion.php"; 

class Carrera extends Conexion {
    
    public function get_select(){
        $result = $this->_db->query('select * from carreras where estado=1'); 
        $carreraData = $result->fetch_all(MYSQLI_ASSOC);
        $select='<div class="form-group">
                    <label for="sel1">Carrera:</label>
                    <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-copyright-mark"></span></span>
                  <select class="form-control" id="sel1">
                  <option >Seleccione..</option>';
        foreach ($carreraData as $carrera):
            $select=$select. '<option value="'.$carrera['id_carrera'].'">'.$carrera['nombre'].'</option>';
        endforeach;
    $select=$select. '</select></div></div>';
    echo $select;
    }


} 

    
  
