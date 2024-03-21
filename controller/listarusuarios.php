
<!DOCTYPE html>
<!-- saved from url=(0058)https://colorlib.com/etc/tb/Table_Responsive_v1/index.html -->
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Equipos Clasificados</title>
    <link rel="shortcut icon" href="favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    
    <link
      rel="stylesheet"
      type="text/css"
      href="./Table V01_files/bootstrap.min.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="./Table V01_files/font-awesome.min.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="./Table V01_files/animate.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="./Table V01_files/select2.min.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="./Table V01_files/perfect-scrollbar.css"
    />

    <link rel="stylesheet" type="text/css" href="./Table V01_files/util.css" />
    <link rel="stylesheet" type="text/css" href="./Table V01_files/main.css" />

    <meta name="robots" content="noindex, follow" />
    <script
      type="text/javascript"
      async=""
      src="./Table V01_files/analytics.js.descarga"
      nonce="2a2ccfc3-9cc9-40d1-a232-68343766bb20"
    ></script>
    <script
      defer=""
      referrerpolicy="origin"
      src="./Table V01_files/s.js.descarga"
    ></script>
    <script nonce="2a2ccfc3-9cc9-40d1-a232-68343766bb20">
      (function (w, d) {
        !(function (Z, _, ba, bb) {
          Z.zarazData = Z.zarazData || {};
          Z.zarazData.executed = [];
          Z.zaraz = { deferred: [], listeners: [] };
          Z.zaraz.q = [];
          Z.zaraz._f = function (bc) {
            return function () {
              var bd = Array.prototype.slice.call(arguments);
              Z.zaraz.q.push({ m: bc, a: bd });
            };
          };
          for (const be of ["track", "set", "debug"])
            Z.zaraz[be] = Z.zaraz._f(be);
          Z.zaraz.init = () => {
            var bf = _.getElementsByTagName(bb)[0],
              bg = _.createElement(bb),
              bh = _.getElementsByTagName("title")[0];
            bh && (Z.zarazData.t = _.getElementsByTagName("title")[0].text);
            Z.zarazData.x = Math.random();
            Z.zarazData.w = Z.screen.width;
            Z.zarazData.h = Z.screen.height;
            Z.zarazData.j = Z.innerHeight;
            Z.zarazData.e = Z.innerWidth;
            Z.zarazData.l = Z.location.href;
            Z.zarazData.r = _.referrer;
            Z.zarazData.k = Z.screen.colorDepth;
            Z.zarazData.n = _.characterSet;
            Z.zarazData.o = new Date().getTimezoneOffset();
            Z.zarazData.q = [];
            for (; Z.zaraz.q.length; ) {
              const bl = Z.zaraz.q.shift();
              Z.zarazData.q.push(bl);
            }
            bg.defer = !0;
            for (const bm of [localStorage, sessionStorage])
              Object.keys(bm || {})
                .filter((bo) => bo.startsWith("_zaraz_"))
                .forEach((bn) => {
                  try {
                    Z.zarazData["z_" + bn.slice(7)] = JSON.parse(
                      bm.getItem(bn)
                    );
                  } catch {
                    Z.zarazData["z_" + bn.slice(7)] = bm.getItem(bn);
                  }
                });
            bg.referrerPolicy = "origin";
            bg.src =
              "/cdn-cgi/zaraz/s.js?z=" +
              btoa(encodeURIComponent(JSON.stringify(Z.zarazData)));
            bf.parentNode.insertBefore(bg, bf);
          };
          ["complete", "interactive"].includes(_.readyState)
            ? zaraz.init()
            : Z.addEventListener("DOMContentLoaded", zaraz.init);
        })(w, d, 0, "script");
      })(window, document);
    </script>
  </head>

  <body>
    <div class="limiter">
      <div class="container-table100">
        <div class="wrap-table100">
          <div class="table100">
            <table>
              <thead>
                <tr class="table100-head">
                  <th class="column5" width="10"  rowspan="4">ID</th>
                  <th class="column3">NOMBRE COMPLETO</th>
                  <th class="column3"># TICKETS</th>
                  <th class="column3"># DOCUMENTO</td>
                  <th class="column5"></th>
                </tr>
              </thead>
              <tbody>
              <?php
                include "../conexion/conexion.php";
                $sql = "SELECT * from usuarios ";
                $result=mysqli_query($conn, $sql);
                while($mostrar=mysqli_fetch_array($result)){
              ?>
                <tr>
                  <td class="column5"><?php echo $mostrar['id_usuario'];?></td>
                  <td class="column3"><?php echo $mostrar['nombres'].' '.$mostrar['apellidos'];?></td>
                  <td class="column3"><?php echo $mostrar['no_tickets'];?></td>
                  <td class="column3"><?php echo $mostrar['documento'];?></td>
                  <td class="column5"></td>
                </tr>
                <?php  
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script src="./Table V01_files/jquery-3.2.1.min.js.descarga"></script>
    <script src="./Table V01_files/popper.js.descarga"></script>
    <script src="./Table V01_files/bootstrap.min.js.descarga"></script>
    <script src="./Table V01_files/select2.min.js.descarga"></script>
    <script src="./Table V01_files/main.js.descarga"></script>
    <script async="" src="./Table V01_files/js"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    </script>
    <script
      defer=""
      src="./Table V01_files/vaafb692b2aea4879b33c060e79fe94621666317369993"
      integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
      data-cf-beacon='{"rayId":"7669946becd46dcb","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}'
      crossorigin="anonymous"
    ></script>
  </body>
</html>
