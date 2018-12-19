<?php
    session_start();  
    if (!isset($_SESSION["NoCuenta"]))
        header("Location: login-estudiantes.php");//Redireccion con PHP
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Matricula</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo.ico">
    <link href="css/matricula.css" rel="stylesheet"> 
    <link href="signinestudiante/css/fa-svg-with-js.css" rel="stylesheet"> 
</head>
<body>
<?php
include ("header.html") ;
?>
         
         <center> <h1><b>Registro de calificaciones </b> </h1></center>
            <br>
            

			<div class="container-fluid">
                <h2 class="text-center all-tittles">Listado de estudiantes matriculadose</strong></h2>
                
                <div class="table-responsive" id="div-credenciales" style=" display=inline-block;">
                    <div class="div-table" id="div-estudiantes" style=" display=inline-block; margin-left:400px;  margin-right:400px; background-color:white; font-weight:bold;   ; !important;">
                       
                    <button type="button" id="btncalificar" data-dismiss="modal">Calificar</button>
                            </div>
                        </div>
                    </div>
                </div>

           
	

                <script src="js/jquery-3.3.1.min.js"></script>     
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/controlador-notas.js"></script>
</body>
</html>