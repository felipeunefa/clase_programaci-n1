<?php   
     require_once "../Modelo/peluqueria4.php"; 
	 require_once "../Modelo/estructura.php";
    
	$peluqueria4Obj = new peluqueria4M(); 
    $data_peluqueria4 = $peluqueria4Obj->get_peluqueria4();
	$estructura = new Estructura(); 	
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>REGISTROS DE CLIENTES</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <?php 
          $estructura->get_biblioteca();
         ?>
		 
 </head> 
 <body background="../imagenes/salon1.jpg" alt="salon1" width="1200px" height="1000px"/>
     
	 <div class="container">
      <?php 
          $estructura->get_menu(3);
         ?>
	 
	</nav>
        <div class="row">
            <div class="col-md-2">
                <img src="../imagenes/clientes.jpg" alt="clientes" width="100px" height="100px"/>
            </div>
            <div class="col-md-10">
                <h1 align="center">Clientes Registrados</h1> 
                 <table class="table table-bordered" > 
                        <tr class="bg-primary"> 
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
                                Fecha_cita
                            </th> 
                            <th> 
                                Telefono
                            </th> 
							<th> 
                                salon
                            </th>
							<th> 
                                corte
                            </th>
                        </tr><!-- /THEAD --> 

                        <?php foreach ($data_peluqueria4 as $row): ?> 

                        <tr> 
                            <td class="bg-success"><?php echo $row['id_cliente']; ?></td> 
                            <td class="bg-success"><?php echo $row['cliente']; ?></td> 
                            <td class="bg-success"><?php echo $row['cedula']; ?></td> 
                            <td class="bg-success"><?php echo $row['fecha_cita']; ?></td> 
                            <td class="bg-success"><?php echo $row['telefono']; ?></td>  
							<td class="bg-success"><?php echo $row['salon']; ?></td>
							<td class="bg-success"><?php echo $row['corte']; ?></td>
						</tr><!-- /TROW --> 
                     
                        <?php endforeach ?>     
                              
                    </table> 
            </div>
        </div>
    </div>
     
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Isaac Laplante<br/> </p>
      </div>
    </footer>
 </body> 
 </html> 