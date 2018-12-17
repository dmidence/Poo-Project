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
</head>
<body>
<?php
include ("header.html") ;
?>
   <div id="principal">
        <div  id="datos">
       <div id="div-foto"> <img  width="200px"height="150px"src="<?php echo $_SESSION["urlImagen"];  ?>" alt=""></div>
                <div id="datos1" >
            Numero De Cuenta:  <?php echo $_SESSION["NoCuenta"];  ?>        
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
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  adicionar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
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


        <div id="div-matricula">
        

        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
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
<script src="js/bootstrap.min.js"></script> 

 <script src="signinestudiante/js/controlador.js"></script>
</body>
</html>