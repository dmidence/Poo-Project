<?php
    switch($_GET["accion"]){
        case 1:
            include("../class/classes.php");
            echo Clase::obtenerClases();
            
        break;
        case 2:
           include("../class/classes.php");   
           $l = new Clase($_POST["clase"],$_POST["codigo"], $_POST["uv"],$_POST["carrera"], $_POST["facultad"]);
           echo $l->guardarClase();
        
        break;
}
?>