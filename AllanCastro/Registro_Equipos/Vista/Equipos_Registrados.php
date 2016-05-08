<?php   
     require_once "../Modelo/equipos.php";
     require_once "../Modelo/Estructura.php"; 
    $equiposObj = new equiposM();
    $estructura = new Estructura(); 
    $data_equipos = $equiposObj->get_equipos(); 
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
          $estructura->get_lista(3)
          ?>
      </div>
      <div class="col-md-9">
        <h1 align="center">Equipos Registrados</h1>
          <table class="table table-striped" >
            <tr>
              <th>
                Codigo
              </th>
              <th>
                Marca
              </th>
              <th>
                Modelo
              </th>
              <th>
                Serie
              </th>
              <th>
                Complemento
              </th>
            </tr>
            <?php foreach ($data_equipos as $row): ?>
              <tr>
                <td><?php echo $row['id_computadora']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['modelo']; ?></td>
                <td><?php echo $row['serie']; ?></td>
                <td><?php echo $row['descripcion']; ?></td>
              </tr>
            <?php endforeach ?>
          </table>
      </div>
    </div>
     
    <div>   
       <?php 
          $estructura->get_footer()
      ?>
    </div>

 </body> 
 </html>
