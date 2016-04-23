<?php   
     require_once "../Modelo/empleados.php"; 
     require_once "../Modelo/estructura.php"; 
    
    $structura = new Estructura();
   
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Usuarios registrados</title>
     <?php $structura->getBootstrap();?>
 </head> 
 <body>
     !-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php $structura->getHeader(); ?>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php $structura->getNavbar(); ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
     
    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
            	<hr />
                <h1 class="page-header">Excelencia Educativa
                    <small>Abierta al Pueblo</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="img/750x500.jpg" alt="UNEFA" width="750" height="500">
            </div>

            <div class="col-md-4">
                <p><img src="img/ANIVERSARIO.png" alt="Aniversario" width="250" height="250" /></p>
                <h3>Detalles del Proyecto</h3>
                <ul>
                    <li>Creaci&oacute;n de nuestro Patron MVC</li>
                    <li>Modelo</li>
                    <li>Vista</li>
                    <li>Controlador</li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Empleados</h3>
            </div>

           <?php $structura->getTabla();?>

 

            

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
