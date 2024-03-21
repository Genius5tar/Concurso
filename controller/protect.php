<?php
    include "../conexion/conexion.php";
    //Si la variable sesión está vacía
    if (!isset($_SESSION['id_usuario'])) 
    {
    // nos envía a la siguiente dirección en el caso de no poseer autorización //
    header("location:../index.php"); 
    }


?>