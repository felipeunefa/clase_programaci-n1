<?php   
     require_once "../Modelo/consultorio.php";
    require_once "../Modelo/estructura.php";  
    require_once "../Modelo/consulta.php";  
    require_once "../Modelo/medico.php";  

    $consultorioObj = new consultorioM(); 
    $data_consultorio = $consultorioObj->get_consultorio();
    $estructura = new Estructura(); 
    $medicoObj = new consultorioM(); 
    $consultabj = new medico(); 
 
?>

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Pacientes registrados</title>
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
                        <h1 align="center">Registrar Estudiantes</h1> 
                    </div>
<!--
                    empieza el formulario
-->
                <form id="form_re"
                  enctype="multipart/form-data"
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
                            id="nombrepaciente"
                            name="name"
                            placeholder="Nombre"
                            title="Nombre del paciente"
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
                        id="inputcedula"
                        name="cedula"
                        required="required"
                        title="Cedula del paciente"
                        placeholder="Cédula" />
                
            </div>
            </div>
<!--
                inicio de campo de la fecha
-->
            <div class="form-group">

                <label>Fecha de Nacimiento</label>
            <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                <input
                        type="date"
                        class="form-control input-lg"
                        id="inputcedula"
                        name="fecha"
                        required="required"
                        title="fecha de nacimiento del paciente"
                        placeholder="Fecha de Nacimiento" />
                
            </div>
            </div>
<!--
                inicio de campo direccion
-->
            <div class="form-group">

                <label>Dirección</label>
            <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                <textarea 
                    name="direccion"
                    title="Dirección "
                    placeholder="Dirección del Paciente"
                    class="form-control input-lg"
                    required="required"
                    rows="4" 
                    cols="50"></textarea>
                
            </div>
            </div>
            
             <?php 
                $consultorioObj->get_radio();
                $medicoObj->get_select();
            ?>
<!--
                  cierra el div body del panel
-->
                  </div>
<!--
                  abre el pie del panel
-->
            <div class="panel-footer" align="center">
                <button type="button" class="btn btn-info"> Guardar</button>
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
