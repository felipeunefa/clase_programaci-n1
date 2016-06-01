<?php   
    require_once "../Modelo/consultorio.php"; 
    require_once "../Modelo/estructura.php";
    require_once "../Modelo/medico.php";  
    require_once "../Modelo/medicos.php";  
    require_once "../Modelo/consultorio.php";  
    $consultorioObj = new Consultorio(); 
    $data_consultorio = $consultorioObj->get_consultorio();
    $estructura = new Estructura();  
    $medicoObj = new Medicos(); 
    $medico = new Medico();
 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Médicos registrados</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <?php 
          $estructura->get_biblotecas();
         ?>
 </head> 
 <body>
     <div class="container">
      <?php 
          $estructura->get_menu(2);
         ?>
        <div class="row">
            <div class="col-md-2">
                 <?php 
                $estructura->get_logo('logo')
            ?>
            </div>
            <div class="col-md-10">
<!--
                Empieza el panel
-->
                <div class="panel panel-info">
                    <div class="panel-heading" >
                        <h1 align="center">Registrar Consultorio</h1> 
                    </div>
<!--
                    empieza el formulario
-->
                <form id="form_re"
                  enctype="multipart/form-data"
                  action="../controladores/registrar_consultorio.php"
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
                            id="nombreMedico"
                            name="nombreMedico"
                            placeholder="Nombre"
                            title="Nombre del médico"
                            required="true"/>
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
                        id="cedulaMedico"
                        name="cedulaMedico"
                        required="required"
                        title="Cedula del Médico"
                        placeholder="Cedula" />
                
            </div>
            </div>
<!--
                inicio de campo de la fecha
-->
            <div class="form-group">

                <label>MSAS</label>
            <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                <input
                        type="text"
                        class="form-control input-lg"
                        id="msas"
                        name="msas"
                        required="required"
                        title="Registro de sanidad"
                        placeholder="msas" />
                
            </div>
            </div>
<!--
                inicio de campo direccion
-->
            <div class="form-group">

                <label>Teléfono</label>
            <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                <input
                    name="telefono"
                    title="Télefono móvil del médico"
                    placeholder="telefono del medico"
                    class="form-control input-lg"
                    required="required"
                    rows="4" 
                    cols="50">
            </div>
            </div>
            
             <?php 
                $medico->get_radio();
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
