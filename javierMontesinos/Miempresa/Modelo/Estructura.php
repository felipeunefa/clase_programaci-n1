<?php
require 'Formularios.php';
require_once "Empleados.php"; 
$usuarioModel = new empleados(); 
$a_users = $usuarioModel->getEmpleados();

class Estructura {
    public function getBootstrap() {
        
        echo '<link rel="stylesheet" href="css/bootstrap.css"/>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
             <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>';        
    }
    public function getNavbar($posicion) {
       $index = '';
       $registro = '';
       $empleados = '';
       switch ($posicion) {
           case 1:
               $index = 'class="active"';

               break;
           case 2:
               $empleados = 'class="active"';

               break;

           default:
               $index = 'class="active"';
               break;
       }
       echo '<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MI EMPRESA</a>
    </div>
    <ul class="nav navbar-nav">
      <li '.$index.'><a href="index.php">Inicio</a></li>
      <li '.$empleados.'><a href="empleados.php">Empleados</a></li> 
    </ul>
  </div>';
    }
    
    public function getTabla() {
        $usuarioModel = new empleados(); 
        $a_users = $usuarioModel->getEmpleados();
        echo '<table class="table table-striped"><tr >';
        echo '<th>';
        echo 'Nombre';
        echo '</th>';
        echo '<th>';
        echo 'Apellido';
        echo '</th>';
        echo '<th>';
        echo 'Cedula';
        echo '</th>';
        echo '<th>';
        echo 'Nacimiento';
        echo '</th>';
        echo '<th>';
        echo 'Sexo';
        echo '</th>';
         echo '<th>';
        echo 'Cargo';
        echo '</th>';
        echo '<th>';
        echo 'Departamento';
        echo '</th>';
        echo '<th>';
        echo 'Salario';
        echo '</th>';
        echo '<th>';
        echo 'Acciones';
        echo '</th>';
        foreach ($a_users as $row):
        echo '<tr>';
        echo '<td>';
        echo $row['nombreEmpleado'];
        echo '</td>';
        echo '<td>';
        echo $row['apellidoEmpleado'];
        echo '</td>';
        echo '<td>';
        echo  $row['cedulaEmpleado'];
        echo '</td>';
        echo '<td>';
        echo $row['fecha_nacimiento']; 
        echo '</td>';
        echo '<td>';
        echo $row['nombreSexo'];
        echo '</td>';
        echo '<td>';
        echo $row['nombreCargo'];
        echo '</td>';
        echo '<td>';
        echo $row['nombreDep'];
        echo '</td>';
        echo '<td>';
        echo $row['montoSalario'];
        echo '</td>';
        echo '<td>';
        echo 'Editar / Eliminar';
        echo '</td>';
        echo '</tr>';
        endforeach;
        echo '</table>';
    }
    
    
    public function getModalRegistro() {
    $form = new Formularios();    
        echo '<div class="container">
    <!-- Modal -->
  <div class="modal fade" id="registroModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Registro</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form id="form_emp"
                  enctype="multipart/form-data"
                  action="../Controllers/registrarController.php"
                  method="POST"
                  >
            <div class="form-group">
              <label for="nombre"><span class="glyphicon glyphicon-user"></span> Nombre</label>
              <input type="text" class="form-control" id="nombre" name ="nombre" placeholder="Ej: Juan">
            </div>
            <div class="form-group">
              <label for="apellido"><span class="glyphicon glyphicon-user"></span> Apellido</label>
              <input type="text" class="form-control" id="apellidoEmpleado" name ="apellido" placeholder="Perez">
            </div>
            <div class="form-group">
              <label for="cedula"><span class="glyphicon glyphicon-user"></span> Cedula de identidad</label>
              <input type="Number" class="form-control" id="cedula" name ="cedula" placeholder="12345678">
            </div>
            <div class="form-group">
              <label for="nacimiento"><span class="glyphicon glyphicon-user"></span> Fecha de Nacimiento</label>
              <input type="Date" class="form-control" id="nacimiento" name ="nacimiento" placeholder="12345678">
            </div>
            <div class="form-group">

            </div>';
        $form->getSexo();
        $form->getCargo();
        $form->getDepartamento();
        $form->getSalario();
        
            echo '<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Registrar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 
</div>';
    }
    
    public function getModalEmpleados() {
        $usuarioModel = new empleados(); 
        $a_users = $usuarioModel->getEmpleados();
        echo '<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="empleadosModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Empleados</h4>
        </div>
        <div class="modal-body">'; 
        echo '<table class="table table-striped"><tr >';
        echo '<th>';
        echo 'Nombre';
        echo '</th>';
        echo '<th>';
        echo 'Apellido';
        echo '</th>';
        echo '<th>';
        echo 'Cedula';
        echo '</th>';
        echo '<th>';
        echo 'Nacimiento';
        echo '</th>';
        echo '<th>';
        echo 'Sexo';
        echo '</th>';
        echo '<th>';
        echo 'Departamento';
        echo '</th>';
        foreach ($a_users as $row):
        echo '<tr>';
        echo '<td>';
        echo $row['nombreEmpleado'];
        echo '</td>';
        echo '<td>';
        echo $row['apellidoEmpleado'];
        echo '</td>';
        echo '<td>';
        echo  $row['cedulaEmpleado'];
        echo '</td>';
        echo '<td>';
        echo $row['fecha_nacimiento']; 
        echo '</td>';
        echo '<td>';
        echo $row['nombreSexo'];
        echo '</td>';
        echo '<td>';
        echo $row['nombreDep'];
        echo '</td>';
        echo '</tr>';
        endforeach;
        echo '</table>';
        echo '</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>';
    }
    
    public function getSlider() {
        echo '<div id="contenedor">
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item"><img  src="../Vista/img/750x500.jpg" alt="Imagen 1" /></div>
            <div class="item"><img  src="../Vista/img/formacion.jpg" alt="banner2" /></div>
            <div class="item"><img  src="../Vista/img/graduacion.jpg" alt="banner3" /></div>
            <div class="item"><img  src="img/banner598x374-4.jpg" alt="banner4" /></div>
            <div class="item"><img  src="img/banner598x374-5.jpg" alt="banner5" /></div>
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
    </div>';
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
