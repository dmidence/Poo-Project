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
    <script src="js/jquery.min.js"></script> 
    <link href="signinestudiante/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="signinestudiante/css/matri.css" rel="stylesheet"> 
    <link href="signinestudiante/css/fa-svg-with-js.css" rel="stylesheet">
     
</head>
<body>
<?php
include ("header.html") ;
?>
<div class="container" style="margin-top:100px">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</div>




<script src="js/bootstrap.min.js"></script> 
<script src="signinestudiante/js/fontawesome-all.min.js"></script> 
 <script src="signinestudiante/js/controlador.js"></script>
</body>
</html>