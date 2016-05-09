<?php  
class Estructura{
    
    public function get_biblotecas(){
        echo '<link href="../biblotecas/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />
            <script src="../biblotecas/jquery-1.12.2.min.js"></script>
            <script src="../biblotecas/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script> ';  
        }
        
    public function get_menu_principal(){
	
	echo '<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
		<a class="navbar-brand">Registro de Equipos</a>       
	</div>
	<!--div id="navbar" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
		  <li class="active"><a href="#">Home</a></li>
		  <li><a href="#about">About</a></li>
		  <li><a href="#contact">Contact</a></li>
		</ul>
	</div-->
	<div id="navbar" class "navbar-collapse collapse">
		<form class="navbar-form navbar-right">
		</form>
	</div>';
	}

	public function get_lista($posicion){
		$indice="";
		$registra="";
		$registrado="";

		switch ($posicion) {
			case 1:
				$indice = 'active';
				break;
		
			case 2:
				$registra = 'active';
				break;

			case 3:
				$registrado = 'active';
				break;
		}
		echo '<div class="col-sm-12">
			<div class="list-group">
				<a href="index.php" class = "list-group-item '.$indice.'">Inicio</a>
				<a href="registrar_equipos.php" class = "list-group-item '.$registra.'">Registrar Equipos</a>
				<a href="Equipos_Registrados.php" class = "list-group-item '.$registrado.'">Equipos Registrados</a>
				<a href="/" class="list-group-item">Xampp</a>
				<a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=Registro_Equipos&token=97a6191f791b2d2c8b282dca874b0c89" class="list-group-item">Base de Datos</a>
			</div>
		</div>';
	}
	
        
    public function get_footer(){
        echo '<footer class="footer">
      <div class="container">
        <p class="text-muted">Profesor: Felipe Villamizar <br/>
         Catedra: Programación 1 <br/> Universidad Nacional Experimental de la Fuerza Armada. </p>
      </div>
    </footer>';  
        }

        
    public function get_logo($tipo){
        switch ($tipo) {
            case 'escudo':
                echo '<img src="/opt/lampp/htdocs/clase_programaci-n1/AllanCastro/Registro_Equipos/Imagenes/logoEscudo.jpg" alt="Logo Unefa" width="100px" height="100px"/>';
                break; 
            case 'blancoNegro':
                echo '<img src="/opt/lampp/htdocs/clase_programaci-n1/AllanCastro/Registro_Equipos/Imagenes/logo_bn.jpg" alt="Logo Unefa" width="100px" height="100px"/>';
                break; 
            default:
                echo '<img src="/opt/lampp/htdocs/clase_programaci-n1/AllanCastro/Registro_Equipos/Imagenes/logo.jpg" alt="Logo Unefa" width="100px" height="100px"/>';
                break; 
            }
         
        }
    
    }
?>