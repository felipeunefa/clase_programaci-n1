<?php
     require_once '../Modelo/Formularios.php';
     $form = new Formularios();
     require_once "../Modelo/Estructura.php"; 
     $structura = new Estructura();
     require_once "../Modelo/Empleados.php"; 
     $usuarioModel = new Empleados(); 
     $a_users = $usuarioModel->getEmpleados();
?> 
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <html> 
 <head> 
     <title>Usuarios registrados</title>
     <?php $structura->getBootstrap();?>
 </head> 
 <body>
        
        <div class="container">

          <h4><span class="glyphicon glyphicon-lock"></span> Registro</h4>
          <hr>
          <form role="form" method="POST" action="../Modelo/demoform.php">
            <div class="form-group">
              <label for="emp1"><span class="glyphicon glyphicon-user"></span> Nombre</label>
              <input type="text" class="form-control" name="empleado[]" id="emp1" placeholder="Juan">
            </div>
            <div class="form-group">
              <label for="emp2"><span class="glyphicon glyphicon-user"></span> Apellido</label>
              <input type="text" class="form-control" name="empleado[]" id="emp2" placeholder="Perez">
            </div>
            <div class="form-group">
              <label for="emp3"><span class="glyphicon glyphicon-user"></span> Cedula de identidad</label>
              <input type="Number" class="form-control" name="empleado[]" id="emp3" placeholder="12345678">
            </div>
            <div class="form-group">
              <label for="emp4"><span class="glyphicon glyphicon-user"></span> Fecha de Nacimiento</label>
              <input type="Date" class="form-control" name="empleado[]" id="emp4">
            </div>
            <div class="form-group">
            <?php $form->getSexo()?>
              <hr>
             <?php 
             $form->getCargo()
             ?>
              <?php 
             $form->getDepartamento()
             ?>
              <?php 
             $form->getSalario()
             ?>
            
            <?php
            echo '<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Registrar</button>'?>
          </form>
        
    </body>
</html>
