<?php   
     require_once "../Modelo/consultorio.php"; 
     require_once "../Modelo/estructura.php"; 

    $ConsultorioObj = new Consultorio(); 
    $estructura = new Estructura(); 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Pacientes registrados</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <?php 
          $estructura->get_biblotecas()
         ?>
 </head> 
 <body>
     <div class="container">
         <?php 
          $estructura->get_menu(3)
         ?>

        <div class="row">
            <div class="col-md-2">
                <?php 
                $estructura->get_logo('Logo clinica')
            ?>
            </div>
            <div class="col-md-10">
                <div class="jumbotron">
                    <h1 align="center">Ejemplo de un CRUD</h1>
        <p> registro de clinica .</p>
        <?php $consultorioObj->get_count_consultorio();?>
        <a class="btn btn-lg btn-primary" href="//github.com/felipeunefa/clase_programaci-n1" role="button"><span class="glyphicon glyphicon-check"></span>Repositorio en Github</a>
                </div>
            </div>
        </div>
    </div>
     
     <?php 
        $estructura->get_footer()
    ?>
    
    
 </body> 
 </html> 
