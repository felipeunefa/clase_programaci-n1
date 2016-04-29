<?php  
class Estructura{
    
    public function get_biblioteca(){
        echo '<link href="../biblioteca/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
            <script src="../biblioteca/jquery-1.12.2.min.js"></script>
            <script src="../biblioteca/bootstrap-3.3.6/js/bootstrap.min.js"></script> ';  
        }
	
	public function get_menu($activo){
        $index="";
        $reservaciones="";
        $clientes_registrados="";
        switch($activo){
            case 1:
                $index='class="active"';
                break;
            case 2:
                $reservaciones='class="active"';
                break;
            case 3:
                $clientes_registrados='class="active"';
                break;
            }
        echo '<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo" href="#">
               Registro de Clientes
              </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
			<li '.$index.' ><a href="index.php">Inicio</a></li>            
			<li '.$reservaciones.' ><a href="registro_clientes.php">Reservaciones</a></li>
            <li  '.$clientes_registrados.' ><a href="clientes_registrados.php">Clientes Registrados</a></li>
            <li ><a href="https://www.github.com/">Github</a></li>
            <li ><a href="http://localhost/phpmyadmin/index.php?db=peluqueria4&token=3a989ff0b76a30df68985710778ab54a">Base de Datos</a></li>
			 </ul>
			 
			 <ul class="nav navbar-nav navbar-right">
			<li><a href="https://www.gmail.com"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>';  
        }
        
    public function get_footer(){
        echo '<footer class="footer">
      <div class="container">
        <p class="text-muted "> Isaac Laplante <br/></p>
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
			case 'salon1':
                echo '<img src="../imagenes/salon1.jpg" alt="salon1" width="500px" height="500px"/>';
                break; 	
			default:
                echo '<img src="../imagenes/corte.jpg" alt="corte" width="100px" height="100px"/>';
                break; 
            }
         
        }
    
}

?>