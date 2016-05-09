<?php   
    require_once "../Modelo/peluqueria4.php";
    require_once "../Modelo/estructura.php";  
    require_once "../Modelo/empleada.php";  
    require_once "../Modelo/corte.php";  
    require_once "../Modelo/salon.php"; 
	
	 $peluqueria4Obj = new peluqueria4M(); 
    $data_peluqueria4 = $peluqueria4Obj->get_peluqueria4();
    $estructura = new Estructura(); 
    $empleadaObj = new EmpleadaM(); 
    $corteObj = new Corte(); 
	$salonObj = new Salon(); 
 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>clientes registrados</title>
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
          $estructura->get_menu(2)
         ?>
        <div class="row">
            <div class="col-md-2">
                 <?php 
                $estructura->get_logo('peluqueras')
            ?>
            </div>
            <div class="col-md-10">


				<div class="panel panel-primary">
                    <div class="panel-heading" >
                        <h1 align="center">Registro de los clientes</h1> 
                    </div>


                <form id="form_re"
                  enctype="multipart/form-data"
                  action="../control/registro_atencion.php"
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
                            id="nombrecliente"
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

                <label>Fecha de cita</label>
            <div class="input-group col-xs-9">
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                <input
                        type="date"
                        class="form-control input-lg"
                        id="inputfecha"
                        name="fecha"
                        required="required"
                        title="fecha de la cita"
                        placeholder="Fecha de cita" />
                
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
                            name="telefono"
                            placeholder="telefono del cliente"
                            title="telefono del cliente"
                            required="true"/>
            </div>
             </div>
			<?php 
                $corteObj->get_select();
				$salonObj->get_select();
				$empleadaObj->get_radio();
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