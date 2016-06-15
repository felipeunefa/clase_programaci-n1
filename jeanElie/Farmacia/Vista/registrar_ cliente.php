<?php   
    require_once "../Modelo/farmacia.php";
    require_once "../Modelo/estructura.php";  
    require_once "../Modelo/empleados.php";  
	
	$farmaciaObj = new farmaciaM(); 
    $data_farmacia = $farmaciaObj->get_farmacia();
  
    $estructura = new Estructura(); 
    $empleadosObj = new EmpleadosM(); 
   
 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>clientes registrados</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 <link href="../bibliotecas/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
     <script src="../bibliotecas/jquery-1.12.2.min.js"></script>
     <script src="../bibliotecas/bootstrap-3.3.6/js/bootstrap.min.js"></script> 
     <?php 
         // $estructura->get_biblioteca();
         ?>
 </head> 
     
	<div class="container">
     
	 <?php 
          $estructura->get_menu(2)
         ?>

        <div class="row">
            <div class="col-md-2">
                 <?php 
                $estructura->get_logo('')
            ?>
            </div>
            <div class="col-md-10">


				<div class="panel panel-primary">
                    <div class="panel-heading" >
                        <h1 align="center">Registro de las farmacias</h1> 
                    </div>


                <form id="form_re"
                  enctype="multipart/form-data"
                  action="../controladores/registrar_cliente.php"
                  method="POST"
                  >

                <div class="panel-footer">

				<div class="form-horizontal" role="form">
                 <label>Nombre</label>
             <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                  <input
                            type="text"
                            class="form-control input-lg"
                            id="nombre"
                            name="name"
                            placeholder="Nombre"
                            title="Nombre del cliente"
                            required="true"/>
            </div>
             </div>

            <div class="form-horizontal"role="form">

                <label>Cedula</label>
            <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-copyright-mark"></span></span>
                <input
                        type="number"
                        class="form-control input-lg"
                        id="inputcedula"
                        name="cedula"
                        required="required"
                        title="Cedula"
                        placeholder="Cédula" />
                
            </div>
            </div>
			

				<div class="form-horizontal" role="form">
                 <label>Telefono</label>
             <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
                  <input
                            type="text"
                            class="form-control input-lg"
                            id="telefono"
                            name="telefono_del_cliente"
                            placeholder="telefono"
                            title="telefono del cliente"
                            required="true"/>
            </div>
             </div>
			<?php 
				$empleadosObj->get_select();
            ?>

                  </div>

            <div class="panel-footer" align="center">
                <button type="submit" class="btn btn-info"> Guardar</button>
				
            </div>

                  </div>

                  </form>
            </div>
        </div>
    </div>
     
   <?php 
        $estructura->get_footer()
    ?>
 </body> 
 </html> 
