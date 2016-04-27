<?php

        if ( !empty($_POST["empleado"]) && is_array($_POST["empleado"]) ) { 
    echo "<ul>";
    foreach ( $_POST["empleado"] as $empleado ) { 
            echo "<li>";
            echo $empleado; 
            echo "</li>"; 
     }
     echo "</ul>";
}


