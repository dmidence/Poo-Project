<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/escudo.jpg">

    <title>Login docente </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">

   
   <style>
     		
::placeholder { color: white; }
       body {
         
        font-family: Arial, Helvetica, sans-serif;
        background-image: url("img/reloj.jpg");
        
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        background-attachment: fixed;
    
      }

     
    
@media only screen and (max-width: 1100px) {
  .form-signin{
    margin: 0%;
    
  }
  #lateral{
   padding-left: 90px;
  }
  #central{
    margin-left: 100px;
  }
  #talkbubble{
    margin-left: 210px;
}
}

   

   </style>
  </head>

  <body>
  <?php
include ("header.html") ;
  ?> 
     
    
    
     <div id="lateral">
        <img src="img/puma.jpg" alt="puma unah" height="150px">
        
     </div>
     <div id="talkbubble">
       <strong><p style="text-align: center;color:white;">Servicios al docente</p>
       <p style="text-align: center;color:white;" >Para accesar a los servicios de docente debes autenticarte</p></strong>
     </div><style> #talkbubble {width:220px; height:125px; background:black; position:relative; -moz-border-radius:10px; -webkit-border-radius:10px; border-radius: 10px;} #talkbubble:before {content:""; position:absolute; right:100%; top:26px; width:0; height:0; border-top:13px solid transparent; border-right:26px solid black; border-bottom:13px solid transparent;} </style>
           
    <div id="central">
    <form class="form-signin">
    <h5>Ingresa tu numero de empleado y clave</h5>
   
      <input type="text" placeholder="No. Empleado"  >
      
      <input type="password" placeholder="Clave">
      <input class="boton" type="button" value="Ingresar">
    </form>
  
  </div>
    <footer id="texto-pequeño">
    <p style="text-align: center">Si tiene problemas para ingresar al sistema, favor comunicarse al Tel: 2232-5496
      de Lunes a Viernes de 8:00am - 12:00m y 01:00pm - 03:30pm</p>
      <p> Para una mejor experiencia de navegación utilice los navegadores Internet Explorer o Google-Chrome
      </p>
    </footer>
  

  </body>
</html>
