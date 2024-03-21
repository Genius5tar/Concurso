<?php
session_start();
include "../conexion/conexion.php";
    

    if (isset($_POST['documento']) == true) {
        $documento = $_POST['documento'];  
        $clave = $_POST['clave'];  
        
        //to prevent from mysqli injection  
        $documento = stripcslashes($documento);  
        $clave = stripcslashes($clave);  
        $documento = mysqli_real_escape_string($conn, $documento);  
        $clave = mysqli_real_escape_string($conn, $clave);  
        
        $sql = "SELECT * FROM usuarios WHERE documento = '$documento' AND contraseña = '$clave'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
         $count = mysqli_num_rows($result);  
        if($count == 1){  
            $sql="SELECT *  FROM usuarios  WHERE documento='$documento'";
            $query=mysqli_query($conn,$sql);
            $session_dat=mysqli_fetch_array($query);
            $_SESSION['active'] = true;
            $_SESSION['id_usuario'] = $session_dat['id_usuario'];
            $_SESSION['nombres'] = $session_dat['nombres'];
            $_SESSION['apellidos'] = $session_dat['apellidos'];
            $_SESSION['documento'] = $session_dat['documento'];
            $_SESSION['user_type'] = $session_dat['user_type'];

            header('location:../resources/misdatos.php');
        }  
        else{  
            session_destroy();
            echo'<script type="text/javascript">
            alert("!!!.Usuario incorrecto o no existe.!!!");
            window.location.href="../auth/index.php";
            </script>';
            
        } 

    }

?>