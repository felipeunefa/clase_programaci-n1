<?php
require_once "conexion.php"; 
class corte extends Conexion {
    
    public function get_select(){
        $result = $this->_db->query('select * from corte where enlace=1'); 
        
		$corteData = $result->fetch_all(MYSQLI_ASSOC);
        $select='<div class="form-group">
                    <label for="sel1">Corte:</label>
                    <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-scissors"></span></span>
                  <select class="form-control" name="corte" id="sel1">
                  <option >Seleccione..</option>';
        foreach ($corteData as $corte):
            $select=$select. '<option value="'.$corte['id_corte'].'">'.$corte['descripcion'].'</option>';
        endforeach;
    $select=$select. '</select></div></div>';
    echo $select;
    }
} 
    