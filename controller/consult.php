<?php
// Inicializar la sesión
session_start();

// Incluir archivo de conexión
include "../conexion/conexion.php";

// Obtener el código de documento y el ID de usuario de la sesión
$code = $_SESSION['documento'];
$id_usuario = $_SESSION['id_usuario'];

// Consulta para obtener los datos del usuario actual
$sql = "SELECT * FROM usuarios WHERE documento = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $code);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$datos = mysqli_fetch_array($result);

// Consulta para obtener los datos de todos los usuarios (no utilizado en este código)
// $sql2 = "SELECT * FROM usuarios";
// $query2 = mysqli_query($conn, $sql2);
// $datos2 = mysqli_fetch_array($query2);

// Consulta para obtener los tickets del usuario actual
$sql4 = "SELECT * FROM tickets WHERE id_usuario = ?";
$stmt4 = mysqli_prepare($conn, $sql4);
mysqli_stmt_bind_param($stmt4, "i", $id_usuario);
mysqli_stmt_execute($stmt4);
$query4 = mysqli_stmt_get_result($stmt4);

// Cerrar la consulta preparada
mysqli_stmt_close($stmt);
mysqli_stmt_close($stmt4);
?>
