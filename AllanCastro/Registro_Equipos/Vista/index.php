<?php   
     require_once "../Modelo/equipos.php"; 
     require_once "../Modelo/Estructura.php"; 
    $equiposObj = new equiposM(); 
    $estructura = new Estructura(); 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Equipos registrados</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <?php 
          $estructura->get_biblotecas()
         ?>
 </head> 
 <body
     <div class="container">
         <?php 
          $estructura->get_menu(1)
         ?>

        <div class="row">
            <div class="col-md-2">
                <?php 
                $estructura->get_logo("")
            ?>
            </div>
            <div class="col-md-10">
                <div class="jumbotron">
                    <h1 align="center">Ejemplo de un CRUD</h1>
        <p align="center">Este es un ejemplo de un CRUD de registro de equipos, para que los alumnos lo tomen como referencia para su poyecto de fin de semestre.</p>
        <?php $equiposObj->get_equipos();?>
        <a class="btn btn-lg btn-primary" href="//github.com/allanrc23/clase_programaci-n1.git" role="button"><span class="glyphicon glyphicon-check"></span>Repositorio en Github</a>
                </div>
            </div>
        </div>
    </div>
     
     <?php 
        $estructura->get_footer()
    ?>
    
    
 </body> 
 </html>  
