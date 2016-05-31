<?php   
    
    require '../Modelo/estructura.php';
    $estructura = new Estructura();
    
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../biblotecas/jquery-1.12.2.min.js"></script>
    <title>Casas</title>
 
    <!-- CSS de Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <?php 
    $estructura->getBootstrap();
    ?>
 
    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="container">
          <?php
            $estructura->get_menu();
          ?>
      <img src="../imagenes/Header-RESIDENCIAL-HUALAMÁ-CHAPELTIQUE.jpg" alt="..." class="img-thumbnail">
          <?php 
            $estructura->getTabla();
           ?>   
           
    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
 
    <!-- Todos los plugins JavaScript de Bootstrap (también puedes
         incluir archivos JavaScript individuales de los únicos
         plugins que utilices) -->
    <script src="js/bootstrap.min.js"></script>
      </div>
  </body>
</html>
