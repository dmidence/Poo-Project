<?php
    session_start();  
    if (!isset($_SESSION["NoCuenta"]))
        header("Location: login-estudiantes.php");

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
<div class="container" style="margin-top:150px">
          <button id="btnadic" style=""  class="btn btnad" type="button" data-toggle="modal" data-target="#myModal">Adicionar Asignatura</button>
                    </div>
 
                        
</div>
<div class="modal fade" id="myModal" role="dialog" >



        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            
              <!-- Modal content-->
              <div class="modal-content" style="background-color:#183F60">
                <div class="modal-header centrar" >
                  <h6 class="modal-title" style="color:white"><b>Asignaturas</b></h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="background-color:rgb(255, 255, 255);" class="col-12 col-sm-12 col-md-6 col-lg-6 form-control">                
                     <div class="row centrar">               
                         <div class="col-12" style="margin-bottom:2%">
  
                            <div>
                                    <select name="facultades" id="slc-facultades" class="form-control col-12 col-sm-12 col-md-6 col-lg-6 " style="float:left">
                                        <!--AQUI SE VISUALIZAN LAS FACULTADES-->
                                    </select>

                                    <select class="form-control col-12 col-sm-12 col-md-6 col-lg-6 " id="select-carreras" style="float:left">
                                        <!--AQUI SE VISUALIZAN LAS CARRERAS-->
                                    </select>

                                    <select multiple class="form-control col-12 col-sm-12 col-md-12 col-lg-12 " id="select-clases"  size="5">
                                        <!--AQUI SE VISUALIZAN LAS CLASES DE LA CARRERA-->                                       
                                    </select>

                                    <select multiple class="form-control col-12 col-sm-12 col-md-12 col-lg-12 " id="select-secciones" size="12">
                                        <!--AQUI SE VISUALIZAN LAS SECCIONES DE LA CLASE-->      
                                    </select>
                            </div>

                         </div>  
                         <br>                                                    
                     </div>
                </div>  
                <div class="modal-footer">
                    <button class="btn btn-success centrar"  type="button" value="matricular" id="btn-matricular">Matricular</button>
                </div>                              
            </div>
        </div>
          
    </div>
    </div>


 <script src="js/jquery-3.3.1.js"></script>     
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>

<script src="signinestudiante/js/fontawesome-all.min.js"></script> 

</body>
</html>