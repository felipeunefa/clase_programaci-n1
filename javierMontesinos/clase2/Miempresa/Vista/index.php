<?php   
     require_once "../Modelo/empleados.php"; 

    $usuarioModel = new empleados(); 
    $a_users = $usuarioModel->getEmpleados(); 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Usuarios registrados</title>
     <link rel="stylesheet" href="css/bootstrap.css"/>
 </head> 
 <body>
     !-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Inicio</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
     
    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
            	<hr />
                <h1 class="page-header">Excelencia Educativa
                    <small>Abierta al Pueblo</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="img/750x500.jpg" alt="UNEFA" width="750" height="500">
            </div>

            <div class="col-md-4">
                <p><img src="img/ANIVERSARIO.png" alt="Aniversario" width="250" height="250" /></p>
                <h3>Detalles del Proyecto</h3>
                <ul>
                    <li>Creaci&oacute;n de nuestro Patron MVC</li>
                    <li>Modelo</li>
                    <li>Vista</li>
                    <li>Controlador</li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Empleados</h3>
            </div>

            <table class="table table-striped">
<tr >
	<th>ID</th>
	<th>Nombre</th>
	<th>Apellido</th>
        <th>Cedula</th>
        <th>Fecha de Nacimiento</th>
        <th>Cargo</th>
        <th>Sexo</th>
        <th>Salario</th>
        <th>Departamento</th>
</tr>

 <?php foreach ($a_users as $row): ?> 

            <tr> 
                <td><?php echo $row['id_empleado']; ?></td> 
                <td><?php echo $row['nombre']; ?></td> 
                <td><?php echo $row['apellido']; ?></td> 
                <td><?php echo $row['cedula']; ?></td> 
                <td><?php echo $row['fecha_nacimiento']; ?></td>
                <td><?php echo $row['id_cargo']; ?></td> 
                <td><?php echo $row['id_sexo']; ?></td> 
                <td><?php echo $row['id_salario']; ?></td> 
                <td><?php echo $row['id_dep']; ?></td> 
                
            </tr><!-- /TROW --> 
         
            <?php endforeach ?>    
</table>

            

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer class="navbar navbar-default">
            <div class="row">
                <div class="col-lg-12">
                    <p align="center">Universidad Nacional Experimental Polit&eacute;cnica de la Fuerza Armada Nacional | www.unefa.edu.ve</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
    </body>
</html>
