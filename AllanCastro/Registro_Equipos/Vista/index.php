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
 <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
     <div class="container">
         <?php 
          $estructura->get_menu_principal()
         ?>
     </div>
    </nav>
    </br>
    </br>
    </br>
        <div class="row">
            <div class="col-md-3">
                <?php 
                $estructura->get_lista(1)
            ?>
            </div>
            <div class="col-md-9">
                <div class="jumbotron">
                    <h1 align="center">Registro de Equipos</h1>        

        <a align="center" class="btn btn-lg btn-primary" href="//github.com/allanrc23/clase_programaci-n1.git" role="button"><span class="glyphicon glyphicon-share"></span> Repositorio en Github</a>
                </div>
            </div>
        </div>
    <div>   
     <?php 
        $estructura->get_footer()
    ?>
    </div>
    
    
 </body> 
 </html>  
