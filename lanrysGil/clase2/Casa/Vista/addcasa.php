<?php   
    require_once "../Modelo/casa.php";
    require_once "../Modelo/estructura.php";  
    require_once "../Modelo/propietarios.php";  
    require_once "../Modelo/servicios.php";  
    require_once "../Modelo/caracteristicas.php";  
    $casaObj = new Casa(); 
    $data_casa = $casaObj->get_casa();
    $estructura = new Estructura(); 
    $servicioObj = new Servicios(); 
    $propietarioObj = new Propietarios(); 
    $caracteristicaObj = new Caracteristicas(); 
 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Usuarios registrados</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <?php 
          $estructura->getBootstrap();
         ?>
 </head> 
 <body>
     <div class="container">
      <?php 
          $estructura->get_menu(2);
         ?>
        <div class="row">
            <div class="col-md-2">
                
            </div>
            <div class="col-md-10">
<!--
                Empieza el panel
-->
                <div class="panel panel-info">
                    <div class="panel-heading" >
                        <h1 align="center">Registrar Casas</h1> 
                    </div>
<!--
                    empieza el formulario
-->
                <form id="form_re"
                  enctype="multipart/form-data"
                  action="../controladores/registrar_casas.php"
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
                 <label>Nombre de la Casa</label>
             <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                  <input
                            type="text"
                            class="form-control input-lg"
                            id="nombrecasa"
                            name="nombrecasa"
                            placeholder="Nombre de la Casa"
                            title="Nombre de la Casa"
                            required="true"/>
            </div>
             </div>
<!--
                inicio de campo de la cedula
-->
            <div class="form-group">

                <label>Numero de Casa</label>
            <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-copyright-mark"></span></span>
                <input
                        type="text"
                        class="form-control input-lg"
                        id="numero"
                        name="numero"
                        required="required"
                        title="Numero de Casa"
                        placeholder="Numero de Casa" />
                
            </div>
            </div>
<!--
                inicio de campo de la fecha
-->
            <div class="form-group">

            <div class="input-group col-xs-9">
            <?php $propietarioObj->get_select();?>
            </div>
            </div>
<!--
                inicio de campo direccion
-->
            <div class="form-group">

            <div class="input-group col-xs-9">
                <?php $servicioObj->get_select()?>                
            </div>
            </div>
            
             <?php 
                $caracteristicaObj->get_select();
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

