<?php   
<<<<<<< HEAD
     require_once "../Modelo/peluqueria4.php"; 
	 require_once "../Modelo/estructura.php"; 
    
	 $peluqueria4Obj = new peluqueria4M(); 
    $estructura = new Estructura(); 
=======
     require_once "../Modelo/peluqueria2.php"; 
    $usuarioModel = new peluqueria2M(); 
    $a_users = $usuarioModel->get_peluqueria2(); 
>>>>>>> 09bd302d3afcc0fcb57bd84053341b515c968e94
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
<<<<<<< HEAD
     <title>Registro de Clientes</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     
	 <?php 
          $estructura->get_biblioteca()
         ?>
		 
 </head> 
 <body>
     <div class="container">
         
	<?php 
          $estructura->get_menu()
         ?>

        <div class="row">
            <div class="col-md-2">
    
	<?php 
          $estructura->get_logo('')
         ?>
            </div>
            <div class="col-md-10">
                <div class="jumbotron">
                    <h1 align="center">Reservaciones</h1>
        <center><p>Pagina de registro de clientes para la peluqueria.</p></center>
        <?php $peluqueria4Obj->get_count_peluqueria4();?>
                </div>
            </div>
        </div>
    </div>
     
     <?php 
        $estructura->get_footer()
    ?>
    
=======
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
>>>>>>> 09bd302d3afcc0fcb57bd84053341b515c968e94
    
 </body> 
 </html> 