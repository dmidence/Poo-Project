<?php
    session_start();  
    if (!isset($_SESSION["NoJefe"]))
        header("Location: login-jefe.php");//Redireccion con PHP
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Asignar Asignatura</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo.ico">ç
    
    <link href="css/asignar.css" rel="stylesheet"> 
</head>
<body>

   <div id="principal">
        <div  id="datos">
       <div id="div-foto"> <img  width="200px"height="150px"src=" " alt=""></div>
                <div id="datos1" >
            Numero De Cuenta:   
            <br>
            <br>
            Nombre:                  
    <br>
    <br>
            Carrera:  
            <br>
            <br>
            </div>
            <div id="datos2">
             Periodo: III
             <br>
             <br>
             Centro: 
             <br>
             <br>
             año: 2018
            
            </div>
           
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