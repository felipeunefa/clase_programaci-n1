<?php   
     require_once "../Modelo/facturacion.php";
    require_once "../Modelo/estructura.php";  

    $facturaObj = new FacturaM(); 
    $data_facturas = $facturaObj->get_Factura();
    $estructura = new Estructura(); 
 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Facturas registrados</title>
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
                <h1 align="center">facturas Registrados</h1> 
                 <table class="table table-striped" > 
                        <tr> 
                            <th> 
                                Id 
                            </th> 
                            <th> 
                                Nit 
                            </th> 
                            <th> 
                                Nombre
                            </th> 
                            <th> 
                                Apellido 
                            </th> 
                            <th> 
                                Direcci&oacute;n
                            </th> 
                            <th> 
                                Telefono
                            </th> 
                            
                        </tr><!-- /THEAD --> 

                        <?php foreach ($data_facturas as $row): ?> 

                        <tr> 
                            <td><?php echo $row['id_cliente']; ?></td> 
                            <td><?php echo $row['nit']; ?></td> 
                            <td><?php echo $row['Nombre']; ?></td> 
                            <td><?php echo $row['apellido']; ?></td> 
                            <td><?php echo $row['Direccion']; ?></td> 
                            <td><?php echo $row['Telefono']; ?></td> 
                         <!--   <td><?php echo utf8_encode($row['carrera']); ?></td> 
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
