<?php  
class Estructura{
    
    public function get_biblotecas(){
        echo '<link href="../biblioteca/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
            <script src="../biblioteca/jquery-1.12.2.min.js"></script>
            <script src="../biblioteca/bootstrap-3.3.6/js/bootstrap.min.js"></script> ';  
        }
        
    public function get_menu($posicion){
        $Index="";
        $consultorio="";
        $Registrar="";
        switch($posicion){
            case 1:
                $Index='class="active"';
                break;
            case 2:
                $Registrar='class="active"';
                break;
            case 3:
                $consultorio='class="active"';
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
    
    Registro Consultorio
    </a> 
    </div>

    <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
        <li '.$Index.'> <a href="index.php">Inicio</a></li>
        <li '.$Registrar.'><a href="registrar_medicos.php">Registro de Médicos</a></li>
        <li '.$consultorio.'><a href="registro_consultorio.php"> Registro de consultorio </a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>';  
        }
        
    public function get_footer(){
        echo '<footer class="footer">
      <div class="container">
        <p class="text-muted">Profesor: Felipe Villamizar <br/>
         Catedra: Programación 1 <br/> Universidad Nacional Experimental de la Fuerza     		Armada.
	<br> Alumno: Angela Rangel <br/>
 </p>
      </div>
    </footer>';  
        }
        
    public function get_logo($tipo){
        switch ($tipo) {
            case 'logo':
                
                echo '<img src="../imagenes/logo.png" alt="logo" width="100px" height="100px"/>';
                break; 
            }
         
        }
    
    }

?>
