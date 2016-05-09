<?php   
     require_once "../Modelo/Estructura.php"; 
     require_once "../Modelo/Empleados.php"; 
     $structura = new Estructura();
     $empleado = new Empleados();
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Usuarios registrados</title>
     <?php $structura->getBootstrap();?>
 </head> 
 <body>

 <nav class="navbar navbar-inverse">
  <?php $structura->getNavbar(1);?>
</nav>
     
    <!-- Page Content -->
    <div class="container">
        
        <!-- Portfolio Item Heading -->
        <div class="row">
            <hr>
            <div class="col-lg-12">
                <div class="col-md-4">
                    <p><img class="img-responsive"src="img/ANIVERSARIO.png" alt="Aniversario" width="250" height="250" /></p>
                <h3>Detalles del Proyecto</h3>
                <ul>
                    <li>Creaci&oacute;n de nuestro Patron MVC</li>
                    <li>Modelo <span class="glyphicon glyphicon-ok"></span></li>
                    <li>Vista <span class="glyphicon glyphicon-ok"></span></li>
                    <li>Controlador <span class="glyphicon glyphicon-ok"></span></li>
                    </ul>
                <button type="button" class="btn btn-info btn-lg" id="empleadosBtn">Empleados</button>
                <button type="button" class="btn btn-info btn-lg" id="registroBtn">Registrar</button>
            </div> 
                <img class="img-responsive" src="../Vista/img/750x500.jpg" width="700" height="350"/>
                <h1 class="page-header">Excelencia Educativa
                    <small>Abierta al Pueblo</small>
                </h1>
            </div>
            <hr>
        </div>
        <!-- /.row -->
        
        <!-- Portfolio Item Row -->
        <div class="row">
          
            <!--Modal Empleados -->
            <?php $structura->getModalEmpleados()?>
            <script>
            $(document).ready(function(){
                $("#empleadosBtn").click(function(){
                    $("#empleadosModal").modal();
                });
            });
            </script>
  
            <!-- Fin Modal Empleados-->
            <!--Modal Registro -->
            <?php $structura->getModalRegistro()?>
            <script>
            $(document).ready(function(){
                $("#registroBtn").click(function(){
                    $("#registroModal").modal();
                });
            });
            </script>
            <!-- Fin Modal Registro-->
        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <?php $structura->getSlider();?>
                <script src="js/jquery.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $('.myCarousel').carousel()
                    });
                </script>
            </div>
            
            
        </div>
        <!-- /.row -->

        <hr>
        
        <!-- Footer -->
        <?php $structura->getFooter();?>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
    </body>
</html>
