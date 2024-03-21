<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.js"></script>
    <title></title>
</head>
<body>
<div class="col s12 m12">
  <main class="grid">
      <article>
        <img src="../resources/favicon.png" alt="Sample photo">
        <div class="text">
          <center><h3>!IMPORTANTE!</h3>
          <p><img src="./ball.png" width="20" height="20" alt="">
            Por cada ticket que sea rellenado se sumara un costo de $10.000,
            <span style="color: red;"> tener en cuenta que el valor total, al final sera descontado de la siguiente nomina (30/11/2022). </span>
          </p>
          <p><img src="./ball.png" width="20" height="20" alt="">
            Para agregar un ticket pulse en nuevo ,
            <span style="color: red;"> y complete su prediccion segun crea usted. </span>
          </p>
          <p><img src="./ball.png" width="20" height="20" alt="">
            Al guardar un tikect,
            <span style="color: red;"> este bajo ninguna circustancia podra ser modificado o eliminado. </span>
          </p>
          </center>
          <br><br>
          <br><br>
          <b><p><img src="./ball.png" width="20" height="20" alt="">
            Para completar su participacion descargue el FORMATO DE AUTORIZACION NOMINA porfavor digilenciarlo y enviarlo al correo: 
            <span style="color: red;">recursoshumanos@eurostylesas.com</span>
          </p></b>
          <br><br>
          <a href="../resources/docs/Autorizacion_nomina.pdf" download="Autorizacion_nomina.pdf">Descargar Formato De Autorizacion</a>
        </div>
      </article>
          <div class="row">
            <div class="row">
              <div class="col s12 m12">
                <div class="card large">
                  <div class="card-content" height="100%" >
                    <form action="../controller/addtickets.php"  method="POST">
                      <span class="card-title">Agregar Nuevo</span>
                        <p>Por Favor completar todos los campos para llenar el Ticket.</p>
                        <h6><img src="./ball.png" width="20" height="20" alt="">Opcion 1  --  Que Equipo Sera El campeon y el marcador</h6><br>
                        <div class="input-field col s20">
                          <select name="dt_ganador">
                            <option value=""  disabled selected>Elija equipo</option>
                            <?php
                            $sql3 = "SELECT * from equipos ";
                            $query3=mysqli_query($conn, $sql3);
                            while($select=mysqli_fetch_array($query3)){
                              echo '<option value="'.$select['nombre'].'">'.$select['nombre'].'</option>';
                            }
                            ?>
                          </select>
                          <label>Equipo Campeon</label>
                        </div>
                        <div class="input-field col s3">
                          <select name="dt_marcador1">
                            <option value="0" selected>0</option>
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                            <option value="5" >5</option>
                          </select>
                          <label>Marcador 1</label>
                        </div>
                        <div class="input-field col s3">
                          <select name="dt_marcador2">
                            <option value="0" selected>0</option>
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                            <option value="5" >5</option>
                          </select>
                          <label>Marcador 2</label>
                        </div>
                        <br><br><br><br>
                        <h6><img src="./ball.png" width="20" height="20" alt="">Opcion 2  --  Equipos que jugaran la Final</h6><br>
                        <div class="input-field col s20">
                        <select name="dt_equipo1">
                            <option value=""  disabled selected>Elija equipo</option>
                            <?php
                            $sql3 = "SELECT * from equipos ";
                            $query3=mysqli_query($conn, $sql3);
                            while($select=mysqli_fetch_array($query3)){
                              echo '<option value="'.$select['nombre'].'">'.$select['nombre'].'</option>';
                            }
                            ?>
                          </select>
                          </select>
                          <label>Equipo 1</label>
                        </div>
                        <div class="input-field col s20">
                          <select name="dt_equipo2">
                            <option value="" disabled selected>Elija equipo</option>
                            <?php
                            $sql3 = "SELECT * from equipos ";
                            $query3=mysqli_query($conn, $sql3);
                            while($select=mysqli_fetch_array($query3)){
                              echo '<option value="'.$select['nombre'].'">'.$select['nombre'].'</option>';
                            }
                            ?>
                          </select>
                          <label>Equipo 2</label>
                        </div>                        

                      <button class="btn-floating halfway-fab waves-effect waves-light blue " type="submit" >
                        <i class="material-icons right">add</i></button>
                    </form>                      
                </div>
              </div>
            </div>
          </div>
      <?php   while ($row_p=mysqli_fetch_array($query4)) {?>
        <div class="row">
            <div class="row">
              <div class="col s12 m12">
                <div class="card large">
                  <div class="card-content" height="100%" >  <br>                
                  <center><span class="card-title">TICKET # <?PHP echo $row_p['no_ticket'];?></span>
                  <h7>Fecha de creacion <?PHP echo $row_p['fecha'];?> </h7>
                  <br><br>
                  </center> 

                        <h6><img src="./ball.png" width="20" height="20" alt="">Opcion 1  --  Que Equipo Sera El campeon y el marcador</h6><br>
                        <div class="input-field col s20">
                          <select>
                            <option value="" disabled selected><?PHP echo $row_p['ganador']?></option>
                          </select>
                          <label>Equipo Campeon</label>
                        </div>
                        <div class="input-field col s3">
                          <select>
                            <option value="0" disabled selected><?php echo $row_p['marcador1'];?></option>
                          </select>
                          <label>Marcador 1</label>
                        </div>
                        <div class="input-field col s3">
                          <select>
                            <option value="0" disabled selected><?php echo $row_p['marcador2'];?></option>
                          </select>
                          <label>Marcador 2</label>
                        </div>
                        <br><br><br><br>
                        <h6><img src="./ball.png" width="20" height="20" alt="">Opcion 2  --  Equipos que jugaran la Final</h6><br>
                        <div class="input-field col s13">
                          <select>
                            <option value="" disabled selected><?php echo $row_p['equipo1'];?></option>
                          </select>
                          <label>Equipo 1</label>
                        </div>
                        <div class="input-field col s13">
                          <select>
                            <option value="" disabled selected><?php echo $row_p['equipo2'];?></option>
                          </select>
                          <label>Equipo 2</label>
                        </div>                        
                </div>
              </div>
            </div>
          </div>
      <?php }?> 

  </main>
</div>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <script>document.addEventListener('DOMContentLoaded', function() { M.AutoInit();});</script>
</body>
</html>