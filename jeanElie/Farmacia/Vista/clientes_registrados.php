<?php   
     require_once "../Modelo/farmacia.php"; 
	require_once "../Modelo/estructura.php";

    $farmaciaObj = new farmaciaM(); 
    $data_farmacia = $farmaciaObj->get_farmacia(); 
	$estructura = new Estructura();
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Usuarios registrados</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link href="../bibliotecas/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
     <script src="../bibliotecas/jquery-1.12.2.min.js"></script>
     <script src="../bibliotecas/bootstrap-3.3.6/js/bootstrap.min.js"></script> 
 </head> 
 <body>
   <?php 
          $estructura->get_menu(3)
         ?>
        <div class="row">
            <div class="col-md-2">
            </div>

            <div class="col-md-10">
                <h1 align="center">cliente Registrado</h1> 
                 <table class="table table-striped" > 
                        <tr> 
                            <th> 
                                Id 
                            </th> 
                            <th> 
                                Nombre
                            </th> 
                            <th> 
                                Cedula 
                            </th> 
                            <th> 
                                telefono 
                            </th> 
                            <th> 
                                Empleado
                            </th> 
                        </tr><!-- /THEAD --> 

                       <?php foreach ($data_farmacia as $row):?> 

                        <tr> 
                            <td><?php echo $row['id_cliente']; ?></td> 
                            <td><?php echo $row['nombre']; ?></td> 
                            <td><?php echo $row['cedula']; ?></td> 
                            <td><?php echo $row['telefono']; ?></td> 
                            <td><?php echo $row['nombre_empleado']; ?></td> 
                        </tr><!-- /TROW --> 
                     
                        <?php endforeach ?>     
                              
                    </table> 
            </div>
        </div>
    </div>
     
    <footer class="footer">
      <div class="container">
        <p class="text-muted">jean-Elie vertilien<br/>
          <br/> mi proyecto. </p>
      </div>
    </footer>
 </body> 
 </html> 
