<?php
require_once "conexion.php"; 

class perisferico extends Conexion {
    
    public function get_select(){
        $result = $this->_db->query('SELECT * FROM Perisferico'); 
        $datosLista = $result->fetch_all(MYSQLI_ASSOC);
        $select='<div class="form-group">
                    <label for="sel2">Perisferico:</label>
                    <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-print"></span></span>
                  <select class="form-control" name="perisferico" id="perisferico">
                  <option >Seleccione..</option>';
        foreach ($datosLista as $PerisfericoS):
            $select=$select. '<option value="'.$PerisfericoS['id_perfisferico'].'">'.$PerisfericoS['descripcion'].'</option>';
        endforeach;
    $select=$select. '</select></div></div>';
    echo $select;
    }

}     
