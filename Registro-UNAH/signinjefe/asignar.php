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
       <div id="div-foto"> <img  width="200px"height="150px"src="<?php echo $_SESSION["urlImagen"];  ?>" alt=""></div>
                <div id="datos1" >
            Numero De Empleado  <?php echo $_SESSION["NoJefe"];  ?>        
            <br>
            <br>
            Nombre:  <?php echo $_SESSION["nombre"] ?>                 
    <br>
    <br>
            Carrera:  <?php echo $_SESSION["carrera"];  ?>
            <br>
            <br>
            </div>
            <div id="datos2">
             Periodo: III
             <br>
             <br>
             Centro: <?php echo $_SESSION["centro"];  ?>
             <br>
             <br>
             año: 2018
            
            </div>
            </div> 
        </div>
         <div id="docentes">
        </div>

  





<script src="js/jquery.min.js"></script> 
   
 <script src="js/controlador.js"></script>
</body>
</html>