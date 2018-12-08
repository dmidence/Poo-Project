<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/escudo.jpg">

    <title>DIPP-UNAH</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
  </head>
  <body>

  <?php
include ("header.html") ;
  ?> 

    <main role="main" style="
    margin-top: 80px">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="img/banner1.png" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
               <!-- <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="img/banner2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
               <!-- <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="img/banner3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
               <!-- <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-12">
            <h1>Informacion</h1>
            </div>
          <div class="col-lg-4">
          <a href="#">  <img class="rounded-circle" src="img/circle1.jpg" alt="Generic placeholder image" width="140" height="140"></a>
            <h2>Oferta Academica</h2>
            
             
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
              <a href="#">  <img class="rounded-circle" src="img/circle2.jpg" alt="Generic placeholder image" width="140" height="140"></a>
                <h2>Guia de Estudio</h2>
                
                 
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                  <a href="#">  <img class="rounded-circle" src="img/circle3.jpg" alt="Generic placeholder image" width="140" height="140"></a>
                    <h2>Solicitudes de Ingreso</h2>
                    
                     
                  </div><!-- /.col-lg-4 -->
          
          <!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Nuestros Estudiantes. <!--<span class="text-muted">It'll blow your mind.</span>--></h2>
            
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/1.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Anuncios. </h2>
            
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="img/2.png" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Avisos. 
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/3.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; Este Proyecto es de Nechy y Dani. &middot; <a href="#">Terminos y </a> &middot; <a href="#">Condiciones</a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
  </body>
</html>
