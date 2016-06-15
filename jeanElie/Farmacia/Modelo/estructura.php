<?php  
class Estructura{
    
    public function get_bibliotecas(){
        echo '<link href="../bibliotecas/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
            <script src="../bibliotecas/jquery-1.12.2.min.js"></script>
            <script src="../bibliotecas/bootstrap-3.3.6/js/bootstrap.min.js"></script> ';  
        }
        
    public function get_menu($posicion){
        $index="";
        $registro="";
        $clientes_registrados="";
        switch($posicion){
            case 1:
                $index='class="active"';
                break;
            case 2:
                $registro='class="active"';
                break;
            case 3:
                $clientes_registrados='class="active"';
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
               Registro de Farmacia
              </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li '.$index.' ><a href="index.php">Inicio</a></li>
            <li '.$registro.' ><a href="registrar_ cliente.php">Registrar cliente</a></li>
            <li  '.$clientes_registrados.' ><a href="clientes_registrados.php">cliente Registrado</a></li>
            <li ><a href="/">Xampp</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>';  
        }
        
    public function get_footer(){
        echo '<footer class="footer">
      <div class="container">
        <p class="text-muted"> jean-Elie Vertilen <br/> </p>
      </div>
    </footer>';  
        }
        
    public function get_logo($tipo){
        switch ($tipo) {
            case 'logo':
                echo '<img src="../imagenes/logo.jpg" alt="Logo " width="100px" height="100px"/>';
                break; 
            case 'blancoNegro':
                echo '<img src="../imagenes/logo2.jpg" alt="Logo" width="100px" height="100px"/>';
                break; 
            default:
                echo '<img src="../imagenes/logo3.jpg" alt="Logo" width="100px" height="100px"/>';
                break; 
            }
         
        }
    
    }

?>
