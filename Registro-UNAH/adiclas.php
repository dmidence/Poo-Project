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
<div>
<div class="container" style="margin-top:150px">
          <button id="btnadic" style=""  class="btn btnad" type="button" data-toggle="modal" data-target="#myModal">Adicionar Asignatura</button>
                    </div>
 
                        

<!--  La ventana del examen del modal aqui se puede poner   -->
<!-- ventana para ver las asignatuas matriculadaaaasss   -->
                       
<div id="principal">
                       
                    </div>
                    
                    <div id="agregar-clases">
                            <div>   
                                    <p id="asignaturas Matriculadas">Asignaturas Matriculadas</p>  
                            </div>   
                            <table class="border" cellspacing="10px" cellpadding="10px" >
                                    <thead> 
                                                                           <!--fila 1-->
                                               <tr>
                                                   <td>
                                                       <p><b>Cod.</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Sección</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Asignatura</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>HI</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>HF</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Días</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>UV</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Periodo</b></p>
                                                   </td>
                                               </tr>
                                        
                                              
                                    </thead>
                                    <tbody id="clases-matriculadas">
                                   
                                    </tbody>
                            </table>  
<br>
                            <div style="background-color: #1994ff" id="derechos">   
                                    <p id="encabezado1">Asignaturas en Lista de Espera</p>  
                            </div>   
                            <table class="border" cellspacing="10" cellpadding="10" id="tabla2">
                                    <tbody > 
                                        <!--fila 1-->
                                               <tr>
                                                   <td>
                                                       <p><b>Cod.</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Asignatura</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Sección</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>HI</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>HF</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Días</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>UV</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Periodo</b></p>
                                                   </td>
                                               </tr>
                                                                                                                 <!--fila 2 se ira anadiendo conforme las asignaturas seleccionadas-->
                                              
                                    </tbody>
                            </table> 
<br>
                            <div style="background-color: #1994ff" id="derechos">   
                                    <p id="encabezado1">Laboratorios Matriculados</p>  
                            </div>   
                            <table class="border" cellspacing="10" cellpadding="10" id="tabla2">
                                    <tbody > 
                                        <!--fila 1-->
                                               <tr>
                                                   <td>
                                                       <p><b>Cod.</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Asignatura</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Sección</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>HI</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>HF</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Días</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>UV</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Periodo</b></p>
                                                   </td>
                                               </tr>
                                        
                                    </tbody>
                            </table> 
                    </div>
                </div>
        </section>




<!-- Css del Boostrap ventana modal  añadilo arriba los css !-->




</div>
<div class="modal fade" id="myModal" role="dialog" >



        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            
         
              <div class="modal-content" >
                <div class="modal-header centrar" id="arriba" >
                  <h6 class="modal-title" style="color:white"><b>Asignaturas</b></h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="background-color:rgb(255, 255, 255);" class="col-12 col-sm-12 col-md-6 col-lg-6 form-control">                
                     <div class="row centrar">               
                         <div class="col-12" style="margin-bottom:2%">
  
                            <div>
                                    <select name="facultades" id="slc-facultades" class="form-control col-12 col-sm-12 col-md-6 col-lg-6 " style="float:left">
                                    
                                    </select>
                                    

                                    <select class="form-control col-12 col-sm-12 col-md-6 col-lg-6 " id="select-carreras" style="float:left">
                                      
                                    </select>

                                    <select  id="select-clases" multiple class="form-control col-12 col-sm-12 col-md-12 col-lg-12 "  size="5">
                                                                          
                                    </select>

                                    <select  id="select-secciones" multiple class="form-control col-12 col-sm-12 col-md-12 col-lg-12 "  size="12">
                                         
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
    </div>

 <script src="js/jquery-3.3.1.js"></script>     
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>

<script src="signinestudiante/js/fontawesome-all.min.js"></script> 

</body>
</html>