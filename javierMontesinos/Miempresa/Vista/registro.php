<?php
     require_once "../Modelo/Estructura.php"; 
     $structura = new Estructura();
     require_once "../Modelo/Empleados.php"; 
     $usuarioModel = new empleados(); 
     $a_users = $usuarioModel->getEmpleados();
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Registro de Usuarios</title>
     <?php $structura->getBootstrap();?>
 </head> 
 <body>
      <!-- Navigation -->
<nav class="navbar navbar-inverse">
  <?php $structura->getNavbar(2);?>
</nav>
     <div class="container">

          <h4><span class="glyphicon glyphicon-lock"></span> Registro</h4>
          <hr>
          <form role="form">
            <div class="form-group">
              <label for="nombreEmpleado"><span class="glyphicon glyphicon-user"></span> Nombre</label>
              <input type="text" class="form-control" id="nombreEmpleado" placeholder="Juan">
            </div>
            <div class="form-group">
              <label for="apellidoEmpleado"><span class="glyphicon glyphicon-user"></span> Apellido</label>
              <input type="text" class="form-control" id="apellidoEmpleado" placeholder="Perez">
            </div>
            <div class="form-group">
              <label for="cedulaEmpleado"><span class="glyphicon glyphicon-user"></span> Cedula de identidad</label>
              <input type="Number" class="form-control" id="cedulaEmpleado" placeholder="12345678">
            </div>
            <div class="form-group">
              <label for="nacimiento"><span class="glyphicon glyphicon-user"></span> Fecha de Nacimiento</label>
              <input type="Date" class="form-control" id="nacimiento" placeholder="12345678">
            </div>
            <div class="form-group">
            <label for="sexoEmpleado"><span class="glyphicon glyphicon-user"></span> Sexo: </label>
            <label class="radio-inline"><input type="radio" name="sexo">Femenino</label>
            <label class="radio-inline"><input type="radio" name="sexo">Masculino</label>
            </div>
       <?php 
                
       ?> 
            <?php echo '<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Registrar</button>'?>
          </form>
        </div>
    </body>
</html>
