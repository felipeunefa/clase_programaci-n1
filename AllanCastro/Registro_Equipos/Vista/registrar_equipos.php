<?php   
    require_once "../Modelo/equipos.php";
    require_once "../Modelo/Estructura.php";  
    require_once "../Modelo/marca.php";  
    require_once "../Modelo/perisferico.php";  
    $equiposObj = new equiposM(); 
    $data_equipos = $equiposObj->get_equipos();
    $estructura = new Estructura(); 
    $marcaObj = new Marca(); 
    $perisfericoObj = new perisferico(); 
 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Equipos Registrados</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <?php 
          $estructura->get_biblotecas();
         ?>
 </head> 
 <body>
 	<nav class="navbar navbar-inverse navbar-fixed-top">
     <div class="container">
      <?php 
          $estructura->get_menu_principal();
         ?>
     </div>
    </nav>
    </br>
    </br>
    </br>
    <div class="row">
    	<div class="col-md-3">
    		<?php 
    			$estructura->get_lista(2)
    		?>
    	</div>
    	<div class="col-md-8">
<!--
                Empieza el panel
-->
            <div class="panel panel-info">
                <div class="panel-heading" >
                    <h1 align="center">Registrar Equipos</h1> 
                </div>
<!--
                    empieza el formulario
-->
                <form id="form_re"
                  enctype="multipart/form-data"
                  action="../controladores/registrar_equipos.php"
                  method="POST"
                  >
<!--
                  abre el body del panel
-->
		            <div class="panel-body">
		<!--
		                inicio de campo Marca
		-->
		                <?php
		                	$marcaObj->get_select();
		                ?>
<!--
		                inicio de campo Modelo
-->

		             	<div class="form-group ">
		                 <label>Modelo</label>
		             		<div class="input-group col-xs-9">
		                		<span class="input-group-addon"><span class="glyphicon glyphicon-barcode"></span></span>
		                  		  <input
		                            type="text"
		                            class="form-control input-lg"
		                            id="modeloequipo"
		                            name="modelo"
		                            placeholder="Modelo del Equipo"
		                            title="Modelo del equipo"
		                            required="true"/>
		             		</div>
		             	</div>

<!--
		                inicio de campo Serie
-->
						<div class="form-group ">
		                 <label>Serie</label>
		             		<div class="input-group col-xs-9">
		                		<span class="input-group-addon"><span class="glyphicon glyphicon-barcode"></span></span>
		                  		  <input
		                            type="text"
		                            class="form-control input-lg"
		                            id="seriequipo"
		                            name="serie"
		                            placeholder="Serie del Equipo"
		                            title="Serie del equipo"
		                            required="true"/>
		             		</div>
		             	</div>


<!--
		                inicio de campo Perisferico
-->
		                 <?php
		                 	$perisfericoObj->get_select();
		                 ?>

		             <?php 
		                #$sexoObj->get_radio();
		                #$carreraObj->get_select();
		            ?>
		<!--
		                  cierra el div body del panel
		-->
		        	</div>

<!--
                  abre el pie del panel
-->
            <div class="panel-footer" align="center">
                <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-hdd"> Guardar</button>
            </div>
<!--
                  cierra el div pie del panel
                  
                  cierra el div panel
-->
        </div>
        </form>
<!--
                termina el formulario
-->
            </div>
        </div>
    </div>
     
   <?php 
        $estructura->get_footer()
    ?>
 </body> 
 </html> 
