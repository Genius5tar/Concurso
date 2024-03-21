<?php
    include "../conexion/conexion.php";
    include "../controller/consult.php";
    include "../controller/protect.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="scrip.js"></script>
    <link rel="shortcut icon" href="favicon.png">
    <title>USUARIOS</title>
    <?php
    include "../resources/vistas/header.php";
    ?>
  </head>

  <body>
    
      <section class="grid">
        <article>
          <?php 
            include "../controller/listarusuarios.php";
          ?>
        </article>
      </section>

    </section>
  </body>
</html>
