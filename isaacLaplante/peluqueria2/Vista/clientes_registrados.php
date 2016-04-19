<?php   
     require_once "../Modelo/peluqueria4.php"; 
    $peluqueria4Obj = new peluqueria4M(); 
    $data_peluqueria4 = $peluqueria4Obj->get_peluqueria4(); 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>REGISTROS DE CLIENTES</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link href="../biblioteca/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
     <script src="../biblioteca/jquery-1.12.3.min.js"></script>
     <script src="../biblioteca/bootstrap-3.3.6/js/bootstrap.min.js"></script> 
 </head> 
 <body>
     <div class="container">
     <nav class="navbar navbar-static-top ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-menu">
            <span class="sr-only">desplegar menu</span>
            <i class="fa fa-menu"></i>
			<span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo" href="#">
               <center>Registro de Reservaciones</center>
              </a>
        </div>
        <div id="#header-menu" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
												<li class="active">
					<a href="index.php">Inicio</a>
			</li>
													<li class="">
					<a href="#Registrar">Reservacion</a>
			</li>
													<li class="">
					<a href="clientes_registrados.php">Clientes Registrados</a>
			</li>
													<li class="">
					<a href="http://www.github.com">Github</a>
			</li>
													<li class="">
					<a href="http://localhost/phpmyadmin/index.php?db=peluqueria4&token=ca1aa6ced91ca51ba4c8c4084c11a4fd">Base de Datos</a>
			</li>
		  </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        <div class="row">
            <div class="col-md-2">
                <img src="../imagenes/clientes.jpg" alt="clientes" width="100px" height="100px"/>
            </div>
            <div class="col-md-10">
                <h1 align="center">Clientes Registrados</h1> 
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
                            <td><?php echo $row['id_cliente']; ?></td> 
                            <td><?php echo $row['cliente']; ?></td> 
                            <td><?php echo $row['cedula']; ?></td> 
                            <td><?php echo $row['fecha_cita']; ?></td> 
                            <td><?php echo $row['telefono']; ?></td>  
							<td><?php echo $row['salon']; ?></td>
							<td><?php echo $row['corte']; ?></td>
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