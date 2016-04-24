<?php
require_once "../Modelo/casa.php"; 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of estructura
 *
 * @author lanrys
 */
class Estructura {
    
    public function getBootstrap()
    {
        echo '<link href="../bibliotecas/bootstrap-3.3/css/bootstrap.min.css" rel="stylesheet" media="screen">';
        echo '<link href="../biblotecas/bootstrap-3.3.6/css/bootstrap.css" rel="stylesheet" media="screen">';
        
    }


    public function getNavbar() {
        
        echo '<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
  <button type="button" class="btn btn-default navbar-btn active" href="#" >Inicio</button>
  <button type="button" class="btn btn-default navbar-btn" href="#">Casas</button>
  <button type="button" class="btn btn-default navbar-btn" href="#">Apartamentos</button>
  </div>
</nav>';
    }
    
    public function getTabla()
    {
    $usuarioModel = new casa(); 
    $a_users = $usuarioModel->get_casa(); 
    echo '<table class="table"> 
            <tr> 
                <td> 
                    Id 
                </td> 
                <td > 
                    Nombre de Casa 
                </td> 
                <td> 
                    Numero de Casa
                </td> 
                <td> 
                    Propietario de Casa
                </td> 
                <td> 
                    Servicios de Casa
                </td> 
                <td> 
                    Caracteristicas de Casa
                </td> 
                
            </tr>';

            foreach ($a_users as $row): 

            echo '<tr>';
            echo '<td>'.$row['id_casa'].'</td>'; 
            echo '<td>'.$row['nombreCasa'].'</td>'; 
            echo '<td>'.$row['numero'].'</td>'; 
            echo '<td>'.$row['nombrePropietario'].'</td>'; 
            echo '<td>'.$row['nombreServicio'].'</td>'; 
            echo '<td>'.$row['caract'].'</td>'; 
            echo '</tr>';
            
            endforeach ;
                  
            echo '</table>';
    }
    
    public function getFooter() {
        echo '<footer>Casas Lanrys GIL C.A  &COPY;  2015 - 2016  All Right ReserveD &copysr;' ;
    }
}
