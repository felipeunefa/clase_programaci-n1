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
        echo '<nav class="navbar navbar-inverse">
  <div class="container">
   <div class="navbar-header">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="#">
               Registro de Pacientes
              </a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li '.$Index.'><a href="index.php">Inicio</a></li>
        <li '.$Consulta.'><a href="#"> Consulta </a></li>
        <li '.$Consultorio.'><a href="registro_consultorio.php">Consultorio</a></li>
        <li '.$Medico.'><a href="#">Medicos </a></li>
        <li '.$Paciente.'><a href="registro_pacientes.php>Pacientes </a></li>
        <li ><a href="/">Xampp</a></li>
            <li ><a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=clinicaAngela&token=4321aa2099d6ed8d3c444e70f76b778b">Base de Datos</a></li>
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
            case  'logo':
                echo '<img src="../imagenes/logo.png" alt="Logo clinica" width="100px" height="100px"/>';
                break;
             
         
            }
         
        }
    
    }

?>
