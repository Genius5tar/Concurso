<?php
    include "../conexion/conexion.php";
    include "../controller/consult.php";
    include "../controller/protect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="scrip.js"></script>
    <link rel="shortcut icon" href="favicon.png">
    <!-- Compiled and minified CSS -->
    <title>Tickets</title>
</head>
<?php 
include "./vistas/header.php";
?>
<body class="none">
  <?php 
  include "../controller/listartickets.php";
  ?>

</body>

</html>