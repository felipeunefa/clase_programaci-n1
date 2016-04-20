<?php  
class Estructura{
    
    public function get_biblioteca(){
        echo '<link href="../biblioteca/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
            <script src="../biblioteca/jquery-1.12.2.min.js"></script>
            <script src="../biblioteca/bootstrap-3.3.6/js/bootstrap.min.js"></script> ';  
        }
	
	public function get_menu(){
        echo '<nav class="navbar navbar-static-top ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-menu">
            <span class="sr-only">desplegar menu</span>
            <i class="fa fa-menu"></i>
			<span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo" href="#">
               <center>Registro de Reservaciones</center>
              </a>
        </div>
        <div id="#header-menu" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navar-right">
								<li class="active">
					<a href="index.php">Inicio</a>
			</li>
													<li class="">
					<a href="#Registrar">Reservacion</a>
			</li>
													<li class="">
					<a href="clientes_registrados.php">Clientes Registrados</a>
			</li>
													<li class="">
					<a href="http://www.github.com">Github</a>
			</li>
													<li class="">
					<a href="http://localhost/phpmyadmin/index.php?db=peluqueria4&token=ca1aa6ced91ca51ba4c8c4084c11a4fd">Base de Datos</a>
			</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>';  
        }
        
    public function get_footer(){
        echo '<footer class="footer">
      <div class="container">
        <p class="text-muted"> Isaac Laplante <br/></p>
      </div>
    </footer>';  
        }
        
    public function get_logo($tipo){
        switch ($tipo) {
            case 'cliente':
                echo '<img src="../imagenes/cliente.jpg" alt="clientes" width="100px" height="100px"/>';
                break; 
            case 'salon':
                echo '<img src="../imagenes/salon.jpg" alt="salon" width="100px" height="100px"/>';
                break; 
			case 'peluqueras':
                echo '<img src="../imagenes/peluqueras.jpg" alt="peluqueras" width="100px" height="100px"/>';
                break; 
			default:
                echo '<img src="../imagenes/corte.jpg" alt="corte" width="100px" height="100px"/>';
                break; 
            }
         
        }
    
}

?>