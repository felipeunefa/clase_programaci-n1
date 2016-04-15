<?php   
     require_once "../Modelo/estudiantes.php"; 

    $estudiantesObj = new estudiantesM(); 
    $data_estudiante = $estudiantesObj->get_estudiantes(); 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Usuarios registrados</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link href="../biblotecas/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
     <script src="../biblotecas/jquery-1.12.2.min.js"></script>
     <script src="../biblotecas/bootstrap-3.3.6/js/bootstrap.min.js"></script> 
 </head> 
 <body>
     <div class="container">
     <nav class="navbar navbar-inverse ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo" href="#">
               Registro de Estudiantes
              </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a href="#Registrar">Registrar Estudiante</a></li>
            <li><a href="estudiantes_registrados.php">Estudiantes Registrados</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        <div class="row">
            <div class="col-md-2">
                <img src="../imagenes/logo.jpg" alt="Logo Unefa" width="100px" height="100px"/>
            </div>
            <div class="col-md-10">
                <h1 align="center">Estudiantes Registrados</h1> 
                 <table class="table table-striped" > 
                        <tr> 
                            <th> 
                                Id 
                            </th> 
                            <th> 
                                Nombre 
                            </th> 
                            <th> 
                                Cédula 
                            </th> 
                            <th> 
                                Direcci&oacute;n 
                            </th> 
                            <th> 
                                Fecha de Nacimiento
                            </th> 
                            <th> 
                                Sexo
                            </th> 
                            <th> 
                                Carrera
                            </th> 
                        </tr><!-- /THEAD --> 

                        <?php foreach ($data_estudiante as $row): ?> 

                        <tr> 
                            <td><?php echo $row['id_estudiantes']; ?></td> 
                            <td><?php echo $row['estudiante']; ?></td> 
                            <td><?php echo $row['ci']; ?></td> 
                            <td><?php echo $row['direccion']; ?></td> 
                            <td><?php echo $row['fecha_nacimiento']; ?></td> 
                            <td><?php echo $row['sexo']; ?></td> 
                            <td><?php echo utf8_encode($row['carrera']); ?></td> 
                        </tr><!-- /TROW --> 
                     
                        <?php endforeach ?>     
                              
                    </table> 
            </div>
        </div>
    </div>
     
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Profesor: Felipe Villamizar <br/>
         Catedra: Programación 1 <br/> Universidad Nacional Experimental de la Fuerza Armada. </p>
      </div>
    </footer>
 </body> 
 </html> 
