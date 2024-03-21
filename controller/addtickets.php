<?php 
include '../conexion/conexion.php';
session_start();


$Date = date('Y-m-d', time());
$valor=10000;
$id_user=$_SESSION['id_usuario'];

if (isset($_POST['dt_ganador']) == true) {
    $ganador = $_POST['dt_ganador'];  
    $marcador1 = $_POST['dt_marcador1'];
    $marcador2 = $_POST['dt_marcador2'];  
    $equipo1 = $_POST['dt_equipo1'];  
    $equipo2 = $_POST['dt_equipo2'];  

    // echo $ganador.' '.$marcador1.' '.$marcador2.' '.$equipo1.' '.$equipo2.' '.$_SESSION['id_usuario'];
    $sql = "SELECT COUNT(*) FROM tickets WHERE id_usuario = $id_user";
    $numtick=mysqli_query($conn, $sql);
    $result =mysqli_fetch_array($numtick);
    $tcktotal=$result[0];
    $total=$tcktotal+1;


    $add="INSERT INTO tickets (no_ticket, valor, ganador, marcador1, marcador2, equipo1, equipo2, fecha, id_usuario) 
            VALUES ('$total', '$valor', '$ganador', '$marcador1', '$marcador2', '$equipo1', '$equipo2', '$Date', '$id_user')";
    $F=mysqli_query($conn, $add);
    echo'<script type="text/javascript">
            alert("!!!.Agregado correctamente.!!!");
            window.location.href="../auth/index.php";
            </script>';
    header('location:../resources/tickets.php');

}






?>