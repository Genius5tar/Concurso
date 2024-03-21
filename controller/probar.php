

    <article>
      <div style="border: 1px ; margin-top: 1cm; margin-left: 2cm; ">
        <h2>NOTA.</h2>
        <p><img src="./ball.png" width="20" height="20" alt="">
          Por cada ticket que sea rellenado se sumara un costo de $10.000,
          <span style="color: red;"> tener en cuenta que el valor total, final sera descontado de la siguiente nomina (30/11/2022). </span>
        </p>
        <p><img src="./ball.png" width="20" height="20" alt="">
          Para agregar un ticket pulse en nuevo ,
          <span style="color: red;"> tener en cuenta que el valor total, final sera descontado de la siguiente nomina (30/11/2022). </span>
        </p>
        <p><img src="./ball.png" width="20" height="20" alt="">
          Al guardar un tikect,
          <span style="color: red;"> este bajo ninguna circustancia podra ser modificado o eliminado. </span>
        </p>
      </div>
    </article>

    <div class="row">
            <?php   while ($row_p=mysqli_fetch_array($query4)) {?>
              <article>
              <div class="col s12 m6 l4">
                <div class="card">
                  <div class="card-image ">
                    <img class=" materialboxed" height="300px" src="<?php  echo $row_p['id']; ?>">
                    <a href='../database/editar_p.php?id_p=<?php echo $row_p['id']; ?>&ruta=<?php echo $row_p['id']; ?>' class='hoverable btn-floating halfway-fab waves-effect waves-light '><i class="material-icons">create</i></a>
                    <a href='../database/borrar_p.php?id_p=<?php echo $row_p['id']; ?>&ruta=<?php echo $row_p['id']; ?>' style="position: absolute;  right: 70px;"  class='right hoverable  btn-floating halfway-fab waves-effect waves-light red '><i class="material-icons ">delete</i></a>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><b><?php  echo $row_p['id']; ?></b><i class="material-icons right">more_vert</i></span>
                    <span><b><?php echo $row_p['id']; ?></b></span>
                  </div>
                  <div class="card-reveal" style="z-index:0;">
                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Card Title</span>
                    <ul>
                      <li>Nombre: <?php echo $row_p['id'];?></li>
                      <li>Precio: <?php echo $row_p['id']; ?></li>
                      <li>Lugar: <?php   echo $row_p['id'];  ?></li>
                      <li>Talla: <?php echo $row_p['id']; ?></li>
                      <li>Fecha: <?php  echo $row_p['id']; ?></li>
                      <li>Garantia: <?php  echo $row_p['id'];?></li>
                    </ul>
                  </div>
                  </article>
                  <!-- <div class="card-action center">
                    <a href="pagos.php">COMPRAR</a>
                  </div> -->
                </div> 
              </div>
            <?php }?>  
    </div>




    

    <article>
    <form class="form1" action="../controller/agregar_tickets.php" >
    <div>
        <br>
        <h2>NUEVO TICKET.</h2>
        <p><img src="./ball.png" width="20" height="20" alt="">
          Que equipo cree usted que ganara el mundial,
          <span style="color: red;"> Quatar 2022 </span></p> 
          <br>
          <div class="div2">
            <p>Equipo Campeon</p>
              <select>
                <option value="0">Selecciona:</option>
                <?php
                  $sql3 = "SELECT * from equipos ";
                  $result3=mysqli_query($conn, $sql3);
                  while($mostrar3=mysqli_fetch_array($result3)){
                    echo '<option value="'.$mostrar3['id'].'">'.$mostrar3['nombre'].'</option>';
                  }
                  ?>
              </select>         
            <p>Marcador 1</p>
            <input type="number">
            <br>
            <p>Marcador 2</p>
            <input type="number">
            <br>
          </div>
        <p><img src="./ball.png" width="20" height="20" alt="">
          Cual cree que son los dos equipos qeu lelgan a la final,
          <span style="color: red;"> el dia (18/12/2022). </span>
        </p>
        <br> <br>
        <p>EQUIPO 1</p>
        <select>
            <option value="0" >Seleccionar Equipo:</option>
            
              