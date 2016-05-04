<?php   
     require_once "../Modelo/peluqueria4.php"; 
	 require_once "../Modelo/estructura.php"; 
    
	 $peluqueria4Obj = new peluqueria4M(); 
    $estructura = new Estructura(); 

     require_once "../Modelo/peluqueria4.php"; 
    $usuarioModel = new peluqueria4M(); 
    $a_users = $usuarioModel->get_peluqueria4(); 
?>
	
	<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Registro de Clientes</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     
	 <?php 
          $estructura->get_biblioteca();
         ?>
		 
 </head> 
 <body background="../imagenes/salon1.jpg" alt="salon1" width="500px" height="500px"/>
     
	<div class="container">
         
	<?php 
          $estructura->get_menu(1);
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
    
 </body> 
 </html> 