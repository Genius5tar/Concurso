<?php
include "../conexion/conexion.php";
include "../controller/consult.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="favicon.png">
    <script src="scrip.js"></script>
    <title>Datos</title>
    <?php
    include "../resources/vistas/header.php";
    ?>
</head>

<body>
    <section class="grid">
        <article>
            <section class="info_contaner">
                <div class="card card-body">
                    <div class="edit_info">
                        <h4>MIS DATOS</h4>
                    </div>
                    <div class="contaner_inf">
                        <div class="card_form">
                            <form class="pr-4 pl-4" style="margin-bottom: 50px;" method="POST">
                                <div class="form-group">
                                    <label for="nombre">Nombres: </label>
                                    <input type="text" class="form-control" readonly onmousedown="return false;" id="nombres" value="<?php echo $datos['nombres'] ?>" name="nombres">
                                </div>
                                <p></p>
                                <div class="form-group">
                                    <label for="apellido">Apellidos: </label>
                                    <input type="text" class="form-control" readonly onmousedown="return false;" id="apellidos" value="<?php echo $datos['apellidos'] ?>" name="apellidos">
                                </div>
                                <p></p>
                                <div class="form-group">
                                    <label for="ndoc">Numero de documento: </label>
                                    <input type="number" class="form-control" readonly onmousedown="return false;" id="ndoc" value="<?php echo $datos['documento'] ?>" name="documento">
                                </div>
                                <p></p>
                                <div class="form-group">
                                    <label for="email">Correo electronico: </label>
                                    <input type="email" class="form-control" readonly onmousedown="return false;" id="email" value="<?php echo $datos['email']?>" name="email" disabled>
                                </div>
                                <p></p>
                                <div class="form-group">
                                    <label for="telefono">Numero de celular: </label>
                                    <input type="telefono" class="form-control" readonly onmousedown="return false;" id="telefono" value="<?php echo $datos['telefono'] ?>" name="telefono">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </article>
    </section>
    <?php   
    //include "../resources/vistas/footer.php";   
    ?>
</body>
</html>
