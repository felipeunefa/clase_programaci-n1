<?php
require_once "empleados.php"; 
$usuarioModel = new empleados(); 
$a_users = $usuarioModel->getEmpleados(); 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of estructura
 *
 * @author javier
 */
class Estructura {
    public function getBootstrap() {
        
        echo '<link rel="stylesheet" href="css/bootstrap.css"/>
             <scrip></script>';        
    }
    public function getNavbar() {
        
       echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Universidad</a>
                    </li>
                    <li>
                        <a href="#">Registro</a>
                    </li>
                    <li>
                        <a href="#">Contactanos</a>
                    </li>
                </ul>
            </div>';
    }
    
    public function getHeader() {
        echo '<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Inicio</a>
               </div>';
    }
    
    public function getTabla() {
        echo '<table class="table table-striped"><tr >';
        echo '<th>';
        echo '</th>';
        foreach ($a_users as $row):
        echo '<tr>';
        echo '<td>';
        echo $row['id_empleado'];
        echo '</td>';
        echo '<td>';
        echo $row['nombre'];
        echo '</td>';
        echo '<td>';
        echo $row['apellido'];
        echo '</td>';
        echo '<td>';
        echo  $row['cedula'];
        echo '</td>';
        echo '<td>';
        echo $row['fecha_nacimiento']; 
        echo '</td>';
        echo '<td>';
        echo $row['id_cargo'];
        echo '</td>';
        echo '<td>';
        echo $row['genero'];
        echo '</td>';
        echo '<td>';
        echo $row['id_salario'];
        echo '</td>';
        echo '<td>';
        echo $$row['id_dep'];
        echo '</td>';
        echo '</tr>';
        endforeach;
        echo '</table>';
    }
    
    public function getFooter() {
        
        echo '<footer class="navbar navbar-default">
            <div class="row">
                <div class="col-lg-12">
                    <p align="center">Universidad Nacional Experimental Polit&eacute;cnica de la Fuerza Armada Nacional | www.unefa.edu.ve</p>
                </div>
            </div>
            </footer>';
    }
    
}
