


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/escudo.jpg">


    <title>Super Administrador</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="superadministrador/css/pricing.css" rel="stylesheet">
  </head>

  <body>
  <?php
include ("header.html") ;
  ?> 

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
      </nav>
      <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Nuevo Usuario</h4>
          </div>
          <div class="card-body">
            <img src="superadministrador/img/nuevousuario.jpg" alt="">
            <div class="list-unstyled mt-3 mb-4">
            <input id="nombre" type="text" class="form-control" placeholder="Nombre">
            <input id="apellido" type="text" class="form-control" placeholder="Apellido">
            <input id="cta" type="text" class="form-control" placeholder="Numero de Cuenta">
            <input id="contraseña" type="text" class="form-control" placeholder="Contraseña">
            <div class="input-group-prepend">
            <label class="input-group-text" for="acceso">Acceso</label>
             
             <select class="custom-select" id="acceso">
             <option selected>Seleccionar </option>
              <option value="alumno">Estudiante</option>
              <option value="prof">Catedratico</option>
              <option value="admin">Administrador</option>
            </select>
            </div>

            <input id="carrera" type="text" class="form-control" placeholder="carrera">
           
            <div class="input-group-prepend">
            <label class="input-group-text" for="centro">Centro</label>
             
             <select class="custom-select" id="centro">
             <option selected>Seleccionar Centro</option>
              <option value="UNAH-CU">UNAH-CU</option>
             <option value="UNAH-VS">UNAH-VS</option>
           <option value="CURLA">CURLA</option>
            </select></div>
           
</div>
          </div>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Agregar</button>
          </div>
        </div>
        <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Secciones</h4>
            </div>
          <div class="card-body">
          <img src="superadministrador/img/edificio.jpg" alt="">
          <div class="list-unstyled mt-3 mb-4">
            <input id="codcarrera" type="text" class="form-control" placeholder="Codigo Carrera">
            <input id="seccion" type="text" class="form-control" placeholder="Seccion">
            <input id="cupos" type="text" class="form-control" placeholder="Numero de Cupos">
            <input id="dias" type="text" class="form-control" placeholder="Dias">
            <input id="docente" type="text" class="form-control" placeholder="Docente">
            
            <button type="button" class="btn btn-lg btn-block btn-primary">Agregar Seccion</button>
          </div>
        </div>
</div>
      </div>


      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
