<?php  
class Estructura{
    
    public function get_biblotecas(){
        echo '<link href="../biblotecas/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />
            <script src="../biblotecas/jquery-1.12.2.min.js"></script>
            <script src="../biblotecas/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script> ';  
        }
        
    public function get_menu(){
        echo '<nav class="navbar navbar-inverse ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo" href="#">
               Registro de Equipos
              </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Inicio</a></li>
            <li ><a href="#Registrar">Registrar Equipos</a></li>
            <li ><a href="Equipos_Registrados.php">Equipos Registrados</a></li>
            <li ><a href="/">Xampp</a></li>
            <li ><a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=Registro_Equipos&token=0c2d8c3e51e923164a5ffefb25f8231e">Base de Datos</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>';  
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
