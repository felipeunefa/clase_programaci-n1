<?php  
class Estructura{
    
    public function get_biblotecas(){
        echo '<link href="../biblioteca/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
            <script src="../biblioteca/jquery-1.12.2.min.js"></script>
            <script src="../biblioteca/bootstrap-3.3.6/js/bootstrap.min.js"></script> ';  
        }
        
    public function get_menu($posicion){
        $Index="";
        $Consulta="";
        $Consultorio="";
        $Médico="";
        $Paciente="";
        switch($posicion){
            case 1:
                $Index='class="active"';
                break;
            case 2:
                $Consulta='class="active"';
                break;

            case 3:
                $Consultorio='class=actve"';
                break;
            case 4:
                $Medico='class=actve"';
                break;
                
            case 5:
                $Paciente='class="active"';
                break;
            }
        echo '<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li '.$Index.'><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
        <li '.$Consulta.'><a href="#"> Consulta </a></li>
        <li '.$Consultorio.'><a href="#">Consultorio</a></li>
        <li '.$Medico.'><a href="#">Medicos </a></li>
        <li '.$Paciente.'><a href="#">Pacientes </a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>';  
        }
        
    public function get_footer(){
        echo '<footer class="footer">
      <div class="container">
        <p class="text-muted">Profesor: Felipe Villamizar <br/>
         Catedra: Programación 1 <br/> Universidad Nacional Experimental de la Fuerza Armada. 
         <br> Nombre Alumno: Angela Rangel <br/> 
         </p>

      </div>
    </footer>';  
        }
        
    public function get_logo($tipo){
        switch (logo) {
            case 'logo':
                echo '<img src="../imagenes/logo.png" alt="Logo clinica" width="100px" height="100px"/>';
                break;
             
         
            }
         
        }
    
    }

?>
