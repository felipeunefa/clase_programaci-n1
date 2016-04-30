<?php
require_once "conexion.php"; 
class salon extends Conexion {
    
    public function get_select(){
        $result = $this->_db->query('select * from salon where enlace=1'); 
        
		$salonData = $result->fetch_all(MYSQLI_ASSOC);
        $select='<div class="form-group">
                    <label for="sel1">Salon:</label>
                    <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                  <select class="form-control" id="sel1">
                  <option >Seleccione..</option>';
        foreach ($salonData as $salon):
            $select=$select. '<option value="'.$salon['id_salon'].'">'.$salon['direccion_salon'].'</option>';
        endforeach;
    $select=$select. '</select></div></div>';
    echo $select;
    }
} 