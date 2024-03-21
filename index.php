<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PUJA QUATAR 2022</title>
    <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
    <link rel="shortcut icon" href="./resources/favicon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div id="content-wrapper">
      <header class="header header--bg">
        <div class="container">
          <nav class="navbar">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
              <a href="https://eurostylesas.com/" aria-label="forecastr logo" class="logo"> 
                <img src="./resources/logo2.png" alt="LOGO" width="250" height="90"></img>
              </a>
              <!-- <a class="navbar-brand" href="#"></a> -->
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav pull-right">
                <li><a href="index.php">HOME</a></li>
                <li><a href="../EuroStyle_concurso/auth/singup.php">REGISTRO</a></li>
                <li><a href="../EuroStyle_concurso/auth/">INICIAR SESION</a></li>
                <li><a href="#">TERMINOS Y CONDICIONES</a></li>
                <!-- <li><a href="tel:97979">CONTACT</a></li> -->
              </ul>
            </div>
          </nav>
          <div class="row">
            <div class="col-lg-6">
              <img class="img-responsive" src="./resources/FIFA.png" alt="">
            </div>
            <div class="col-lg-6 header__content">
              <h1 class="title">Geometria Title Goes Here <span class="title-style"></span></h1>
              <p>Por motivos del gran mundial QUATAR 2022, de este año EUROSTYLE SAS, tiene para ti una gran oportunidad </p>
              <a class="header__button" href="../EuroStyle_concurso/auth/">>>PARTICIPA AQUÍ<<<</a>
              <a class="header__button" href="./resources/docs/TyC_Polla.pdf" download="Terminos_Y_Condiciones.pdf">Terminos y condiciones</a>
            </div>
          </div>
        </div>
      </header>

      <section class="steps">
        <div class="container">
          <div class="page-section text-center">
            <h2 class="page-section__title">Tres simples Pasos</h2>
            <div class="page-section__title-style">
              <span class="first-line"></span>
              <span class="second-line"></span>
            </div>
            <p class="page-section__subtitle">Solo tienes que seguir estos pasos para participar</p>
            <div class="row">
              <div class="col-md-4">
                <div class="text-center steps__single steps__single-first">
                  <img src="assets/images/step1.png" alt="">
                  <p>INGRESA CON TUS DATOS</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="text-center steps__single">
                  <img src="assets/images/step2.png" alt="">
                  <p>TIENES HASTA MAXIMO 5 OPORTUNIDADES PARA DECIDIR QUIEN SERA EL CAMPEON DE QUATAR 2022</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="text-center steps__single steps__single-last">
                  <img src="assets/images/step3.png" alt="">
                  <p>ESPERA LA FINAL Y SI ACERTASTES GANAS</p>
                </div>
              </div>
            </div>
            <a class="button" href="../EuroStyle_concurso/auth/">>>PARTICIPA AQUÍ<<<</a>
          </div>
        </div>
      </section>

      
    
      <!-- video-popup -->
      <div class="container">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>

                <!-- <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wKtPBOb80II?autoplay=0" frameborder="0" allowfullscreen="" id="video"  allowscriptaccess="always"></iframe>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- video-popup-end -->

      <section class="sponsors sponsors--bg">
        <style>
          .container .row{
          display: flex; justify-content: space-between;
          }
      </style>
        <div class="container" style="" >
          <div class="row">
            <div class="col-lg-2 sponsors__single">
              <img src="assets/images/Nouvelle3.jpg" alt="" width="300" height="200">
            </div>
            <div class="col-lg-2 sponsors__single" >
              <img  src="assets/images/Silky.jpg" alt="" width="300" height="200" >
            </div>
            <div class="col-lg-2 sponsors__single">
              <img src="assets/images/toujours-01.jpg" alt="" width="300" height="200">
            </div>
            <div class="col-lg-2 sponsors__single">
              <img src="assets/images/Perfetta.jpg" alt="" width="300" height="200">
            </div>
          </div>
        </div>
      </section>



    </div>

    <script src="assets/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="assets/owl-slider/owl.carousel.min.js"></script> -->

    <script>
      $(document).ready(function() {
        
        $('button').click( function(e) {
          $('.collapse').collapse('hide');
        });


        
      });
    </script>
  </body>
</html>  

