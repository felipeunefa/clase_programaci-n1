<?php   
     require_once "../Modelo/equipos.php"; 

    $usuarioModel = new equiposM(); 
    $a_users = $usuarioModel->get_equipos(); 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Usuarios registrados</title> 
 </head> 
 <body> 
     <table > 
            <tr> 
                <td> 
                    Codigo 
                </td> 
                <td > 
                    Marca 
                </td> 
                <td> 
                    Modelo 
                </td>
		<td>
		    Serie
		</td>
		<td>
		    Monitor
		</td>
		<td>
		    Impresora
		</td>
            </tr><!-- /THEAD --> 

            <?php foreach ($a_users as $row): ?> 

            <tr> 
                <td><?php echo $row['id_computadora']; ?></td> 
                <td><?php echo $row['id_marca']; ?></td> 
                <td><?php echo $row['modelo']; ?></td>
		<td><?php echo $row['serie']; ?></td>
		<td><?php echo $row['id_monitor']; ?></td>
		<td><?php echo $row['id_impresora']; ?></td> 
            </tr><!-- /TROW --> 
         
            <?php endforeach ?>     
                  
        </table> 
    
 </body> 
 </html> 
