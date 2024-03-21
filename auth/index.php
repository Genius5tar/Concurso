<?php 
session_start();

if (!empty($_SESSION['active'])) {
   header('location: ../resources/misdatos.php');
}else{
  session_destroy();
}



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login #7</title>
  </head>
  <body>
  
  <?php 
   ?>
  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/bg_2.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <center><h3>Ingresar Nuevamente</h3></center>
              <p class="mb-4">Para ingresr por primera ves ingrese su numero de documento en los dos campos.</p>
            </div>



            <form action="../controller/loginConroller.php" method="POST">
              <div class="form-group first">
                <label for="username">Documento</label>
                <input type="text" class="form-control" id="username" name="documento">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Clave</label>
                <input type="password" class="form-control" id="password" name="clave">
              </div>
              <input type="submit" value="Ingresar" class="btn btn-block btn-primary">
              <a href="../index.php" type="submit"  class="btn btn-block btn-primary">Volver</a>
              <!-- <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span> -->
            </form>



            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>