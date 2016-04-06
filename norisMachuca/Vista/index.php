<?php   
     require_once "../Modelo/clinica veterinaria1.php"; 
    $usuarioModel = new clinica veterinaria1M(); 
    $a_users = $usuarioModel->get_clinica veterinaria1(); 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title><center> REGISTRO DE CLIENTES FAMILIA </title> 
 </head> 
 <body> 
     <table > 
            <tr> 
                <td> 
                    Id_cliente
                </td> 
                <td > 
                    nombre y apellido
                </td> 
                <td> 
                    cuenta bancaria
                </td> 
		<td> 
                    telefono 
                </td> 

            </tr><!-- /THEAD --> 

            <?php foreach ($a_users as $row): ?> 

            <tr> 
                <td><?php echo $row['id_cliente']; ?></td> 
		<td><?php echo $row['nombre y apellido']; ?></td> 
                <td><?php echo $row['cuenta bancaria']; ?></td> 
                <td><?php echo $row['telefono']; ?></td> 
            </tr><!-- /TROW --> 
         
            <?php endforeach ?>     
                  
        </table> 
    
 </body> 
 </html> 