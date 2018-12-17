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





</body>
</html>