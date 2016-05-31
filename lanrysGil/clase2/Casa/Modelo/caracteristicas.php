<?php
require_once "conexion.php"; 

class Caracteristicas extends Conexion {
    
    public function get_select(){
        $result = $this->_db->query('select * from caracteristicas where estado=1'); 
        $caracteristicaData = $result->fetch_all(MYSQLI_ASSOC);
        $select='<div class="form-group">
                    <label for="sel1">Caracteristicas:</label>
                    <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-copyright-mark"></span></span>
                  <select class="form-control" name="caracteristicas" id="sel1">
                  <option >Seleccione..</option>';
        foreach ($caracteristicaData as $caracteristicas):
            $select=$select. '<option value="'.$caracteristicas['id_caracteristicas'].'">'.$caracteristicas['num_cuartos'].'</option>';
        endforeach;
    $select=$select. '</select></div></div>';
    echo $select;
    }


} 

    
  
