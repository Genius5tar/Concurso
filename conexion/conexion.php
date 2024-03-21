<?php

$dbname='eurostyle_concurso';
$server='localhost';
$username='root';
$password='Eur0Styl3';


$conn = mysqli_connect($server, $username, $password, $dbname);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }
    mysqli_select_db($conn,$dbname) or die ("si se encuentra la base de datos");
    mysqli_set_charset($conn,"utf8");


/*
// Intenta conectar a la base de datos
$conn = mysqli_connect($server, $username, $password, $dbname);

// Verifica si hubo errores en la conexión
if (mysqli_connect_errno()) {
    // Obtén el código y el mensaje de error
    $errorCode = mysqli_connect_errno();
    $errorMessage = mysqli_connect_error();
    
    // Muestra un mensaje detallado de error
    echo "No se pudo conectar a la base de datos. Código de error: $errorCode. Mensaje: $errorMessage";
    exit();
}

// Intenta seleccionar la base de datos
if (!mysqli_select_db($conn, $dbname)) {
    // Obtén el código y el mensaje de error
    $errorCode = mysqli_errno($conn);
    $errorMessage = mysqli_error($conn);
    
    // Muestra un mensaje detallado de error
    echo "No se pudo seleccionar la base de datos '$dbname'. Código de error: $errorCode. Mensaje: $errorMessage";
    exit();
}

// Establece el conjunto de caracteres
if (!mysqli_set_charset($conn, "utf8")) {
    // Obtén el código y el mensaje de error
    $errorCode = mysqli_errno($conn);
    $errorMessage = mysqli_error($conn);
    
    // Muestra un mensaje detallado de error
    echo "No se pudo establecer el conjunto de caracteres a UTF-8. Código de error: $errorCode. Mensaje: $errorMessage";
    exit();
}

// La conexión se ha establecido correctamente
echo "Conexión exitosa a la base de datos '$dbname'.";
?>
*/
?>