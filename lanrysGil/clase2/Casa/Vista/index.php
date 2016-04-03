<?php   
     require_once "../Modelo/casa.php"; 

    $usuarioModel = new casa(); 
    $a_users = $usuarioModel->get_casa(); 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Casas En Venta</title> 
 </head> 
 <body> 
     <table > 
            <tr> 
                <td> 
                    Id 
                </td> 
                <td > 
                    Nombre 
                </td> 
                <td> 
                    numero
                </td> 
                <td> 
                    Propietario 
                </td> 
                <td> 
                    Servicios 
                </td> 
                <td> 
                    Caracteristicas 
                </td> 
                
            </tr><!-- /THEAD --> 

            <?php foreach ($a_users as $row): ?> 

            <tr> 
                <td><?php echo $row['id_casa']; ?></td> 
                <td><?php echo $row['nombre']; ?></td> 
                <td><?php echo $row['numero']; ?></td> 
                <td><?php echo $row['id_propietario']; ?></td> 
                <td><?php echo $row['id_servicios']; ?></td> 
                <td><?php echo $row['id_caracteristicas']; ?></td> 
            </tr><!-- /TROW --> 
         
            <?php endforeach ?>     
                  
        </table> 
    
 </body> 
 </html> 
