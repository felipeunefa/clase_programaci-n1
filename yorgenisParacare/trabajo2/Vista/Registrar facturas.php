<?php   
     require_once "../Modelo/facturacion.php";
    require_once "../Modelo/estructura.php";  
    require_once "../Modelo/numfactura.php";  
    require_once "../Modelo/detalles_de_factura.php";  
    $facturaObj = new facturaM(); 
    $data_cliente = $facturaObj->get_factura();
    $estructura = new Estructura(); 
    $numfacturaObj = new NumfacturaM(); 
    $Detalle_de_facturaObj = new Detalle_de_factura(); 
    
 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Usuarios registrados</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <?php 
          $estructura->get_biblotecas();
         ?>
 </head> 
 <body>
 <body background="../imagenes/Lighthouse.jpg" alt="Lighthouse" width="600px" height="800px"/>
     <div class="container">
      <?php 
          $estructura->get_menu(2)
         ?>
        <div class="row">
            <div class="col-md-2">
                 <?php 
                $estructura->get_logo('escudo')
            ?>
            </div>
            <div class="col-md-10">
<!--
                Empieza el panel
-->
                <div class="panel panel-info">
                    <div class="panel-heading" >
                        <h1 align="center">Registrar factura</h1> 
                    </div>
<!--
                    empieza el formulario
-->
                <form id="form_re"
                  enctype="multipart/form-data"
				   action="../controladores/Registra_factutas.php"
                  method="POST"
                  >
<!--
                  abre el body del panel
-->
                <div class="panel-body">
<!--
                inicio de campo nombre
-->
                <div class="form-group ">
                 <label>Nombre</label>
             <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                  <input
                            type="text"
                            class="form-control input-lg"
                            id="nombrecliente"
                            name="Nombre"
                            placeholder="Nombre"
                            title="Nombre del cliente"
                            required="true"/>
            </div>
             </div>
<!--
                inicio de campo de la cedula
-->
            <div class="form-group">

                <label>Apellido</label>
            <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input
                        type="text"
                        class="form-control input-lg"
                        id="inputApellido"
                        name="Apellido"
                        required="required"
                        title="Apellido del cliente"
                        placeholder="Apellido" />
                
            </div>
            </div>
			<!--
                inicio de campo de la cedula
-->
            <div class="form-group">

                <label>Cedula</label>
            <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-copyright-mark"></span></span>
                <input
                        type="number"
                        class="form-control input-lg"
                        id="inputcedula"
                        name="cedula"
                        required="required"
                        title="Cedula del cliente"
                        placeholder="Cédula" />
                
            </div>
            </div>
			<!--
                inicio de campo de Direccion
-->
            <div class="form-group">

                <label>Direccion</label>
            <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                
				<textarea 
                        type="text"
                        class="form-control input-lg"
                        id="inputcedula"
                        name="direccion"
                        required="required"
                        title="Direccion del cliente"
                        placeholder="Dereccion del cliente" 
						rows="4"> </textarea>
						
                
            </div>
            </div>
<!--
                inicio de campo telefono
-->
            <div class="form-group">

                <label>telefono</label>
            <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                <textarea 
                    name="telefono"
                    title="telefono del cliente"
                    placeholder="telefono del cliente"
                    class="form-control input-lg"
                    required="required"
                    rows="" 
                    cols=""> </textarea>
                
            </div>
            </div>
            
             <?php 
                $Detalle_de_facturaObj->get_select();
				$numfacturaObj->get_radio();
            ?>
<!--
                  cierra el div body del panel
-->
                  </div>
<!--
                  abre el pie del panel
-->
            <div class="panel-footer" align="center">
                <button type="submit" class="btn btn-info"> Guardar</button>
            </div>
<!--
                  cierra el div pie del panel
                  
                  cierra el div panel
-->
                  </div>
<!--
                termina el formulario
-->
                  </form>
            </div>
        </div>
    </div>
     
   <?php 
        $estructura->get_footer()
    ?>
 </body> 
 </html> 
