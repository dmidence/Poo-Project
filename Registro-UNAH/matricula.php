<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Matricula</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo.ico">
    <link href="css/matricula.css" rel="stylesheet"> 
</head>
<body>
<?php
include ("header.html") ;
?>
   <div id="principal">
        <div id="datos">
            Estudiante:
            <br>
            Carrera:
            <br>
            Periodo: I 

        </div>
        <div id="div-matricula">
        <select class="selecciones" name="departamentos" size=12>
            
            <optgroup label="Departamentos"> 
                                                            <!--<option value="1">Ingeneria en sistema</option>   asi debe de incluirse los departamentos y secciones-->

            </optgroup> 
           </select>
            <select class="selecciones" name="asignatura" size=12>
            
            <optgroup label="Asignatura"> 
           
            </optgroup> 
            </select>
            <select class="selecciones" name="secciones" size=12>
            
            <optgroup label="Secciones"> 
           
            </optgroup>
            </select> 
            <br>
            <input class="boton-matricular" type="button" value="Agregar">
            </div>
         <div>
             <div id="mostrarasignaturas">
                 Asignaturas Matriculas

             </div>
    </div>


  </div>






<script src="js/jquery.min.js"></script> 
   
 <script src="js/controlador.js"></script>
</body>
</html>