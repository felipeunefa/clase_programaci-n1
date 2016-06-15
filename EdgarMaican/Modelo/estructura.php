<?php  
class Estructura{
    
    public function get_biblotecas(){
        echo '<link href="../biblotecas/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
            <script src="../biblotecas/jquery-1.12.2.min.js"></script>
            <script src="../biblotecas/bootstrap-3.3.6/js/bootstrap.min.js"></script> ';  
        }
        
    public function get_menu($posicion){
        $index="";
        $registrados="";
        $registrar="";
        switch($posicion){
            case 1:
                $index='class="active"';
                break;
            case 2:
                $registrar='class="active"';
                break;
            case 3:
                $registrados='class="active"';
                break;
            }
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
               REGISTRO MILITAR
              </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li '.$index.' ><a href="index.php">Inicio</a></li>
            <li '.$registrar.' ><a href="persona_natural.php">Registrar persona</a></li>
            <li  '.$registrados.' ><a href="persona_registrados.php">Personas Registrados</a></li>
            <li ><a href="/">Xampp</a></li>
            <li ><a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=Registro_Militar&token=4321aa2099d6ed8d3c444e70f76b778b">Base de Datos</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>';  
        }
        
        
    public function get_logo($tipo){
        switch ($tipo) {
            case 'escudo':
                echo '<img src="../imagenes/logoEscudo.jpg" alt="Logo MPPD" width="100px" height="100px"/>';
                break; 
            default:
                echo '<img src="../imagenes/logo.jpg" alt="Logo SEPRADIN" width="100px" height="100px"/>';
                break; 
            }
         
        }
    
    }

?>
