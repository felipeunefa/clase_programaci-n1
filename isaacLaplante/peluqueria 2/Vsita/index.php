<?php   
     require_once "../Modelo/peluqueria2.php"; 
    $usuarioModel = new peluqueria2M(); 
    $a_users = $usuarioModel->get_peluqueria2(); 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title><center> REGISTRO DE CLIENTES </center></title> 
 </head> 
 <body> 
     <table > 
            <tr> 
                <td> 
                    Id_cliente
                </td> 
                <td > 
                    Nombre
                </td> 
                <td> 
                    Cedula 
                </td> 
				<td> 
                    telefono 
                </td> 
				<td> 
                    fecha_cita
                </td> 
            </tr><!-- /THEAD --> 

            <?php foreach ($a_users as $row): ?> 

            <tr> 
                <td><?php echo $row['id_cliente']; ?></td> 
                <td><?php echo $row['nombre']; ?></td> 
                <td><?php echo $row['cedula']; ?></td> 
            </tr><!-- /TROW --> 
         
            <?php endforeach ?>     
                  
        </table> 
    
 </body> 
 </html> 