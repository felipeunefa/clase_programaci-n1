<?php
require_once "conexion.php"; 

class Marca extends Conexion {
    
    public function get_select(){
        $result = $this->_db->query('SELECT * FROM Marca'); 
        $marcaData = $result->fetch_all(MYSQLI_ASSOC);
        $select='<div class="form-group">
                    <label for="sel1">Marca:</label>
                    <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                  <select class="form-control" name="marca" id="sel1">
                  <option >Seleccione..</option>';
        foreach ($marcaData as $Marca):
            $select=$select. '<option value="'.$Marca['id_marca'].'">'.$Marca['nombre'].'</option>';
        endforeach;
    $select=$select. '</select></div></div>';
    echo $select;
    }

}     
