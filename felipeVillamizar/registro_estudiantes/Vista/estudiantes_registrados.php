<?php   
     require_once "../Modelo/estudiantes.php";
    require_once "../Modelo/estructura.php";  

    $estudiantesObj = new estudiantesM(); 
    $data_estudiante = $estudiantesObj->get_estudiantes();
    $estructura = new Estructura(); 
 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Usuarios registrados</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <?php 
          $estructura->get_biblotecas();
         ?>
 </head> 
 <body>
     <div class="container">
      <?php 
          $estructura->get_menu(3)
         ?>
        <div class="row">
            <div class="col-md-2">
                 <?php 
                $estructura->get_logo('blancoNegro')
            ?>
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
     
   <?php 
        $estructura->get_footer()
    ?>
 </body> 
 </html> 
