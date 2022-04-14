<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/inicio.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/mp3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Top Semanal</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"> <img src="https://th.bing.com/th/id/R.cc9b7fdf640859ca160c0ada44edb726?rik=bb4HOo%2bT8F2cDQ&riu=http%3a%2f%2fwww.udb.edu.sv%2fboletin_biblioteca%2f2019%2foct%2fimg%2flogo_udb.png&ehk=2oVpcv4AyzNV8oTcoejYqOgJNvl2075N%2bS6gT5S9dPM%3d&risl=&pid=ImgRaw&r=0" height="20" height="20" alt=""> RADIO
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="inicio.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="biografias.php">Biografias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="programas.php">Programas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="musica.php">Musica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="eventos.php">Eventos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reproductor</a>
        </li>
      </ul>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
  <div class="jumbotron jumbotron-main" id="home">
    <div id="particles-js"><canvas class="particles-js-canvas-el" width="1409" height="319" style="width: 100%; height: 100%;"></canvas></div><!-- /.particles div -->
    <div class="container center-vertically-holder">
      <div class="center-vertically">
        <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
          <h1 class="scaleReveal " data-sr-id="46" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s, opacity 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s; transition: transform 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s, opacity 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s; ">
            Radio <strong> - DSS</strong>
          </h1>
          <hr class="bottomReveal" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s, opacity 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s; transition: transform 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s, opacity 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s; ">
          <p class="bottomReveal" data-sr-id="2" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s, opacity 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s; transition: transform 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s, opacity 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s; "></p>
          <a href="#ideology" data-id="ideology" class="scroll-link">
            <div class="scroll-indicator rotateBottomReveal" data-sr-id="40" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1) rotateX(0); opacity: 1;transform: translateY(0) scale(1) rotateX(0); opacity: 1;-webkit-transition: -webkit-transform 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s, opacity 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s; transition: transform 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s, opacity 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.05s; ">
              <span class="ion-mouse"></span><br>
              <span class="ion-android-arrow-down arrow-scroll-indicator"></span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <br>
  <h1 class="container-fluid">Top canciones mas escuchadas</h1><br>
  <br>
  <div class="container w-75">
    <span>
      <div>
        <div class="cardCustom">
          <img src="https://media.istockphoto.com/photos/vinyl-record-picture-id134119615?k=20&m=134119615&s=612x612&w=0&h=zI6Fig1j8mbZp16CgvaDRMPHAzTaBNhhcBR0AldRXtw=" width="40" height="40" alt="" class="imgAlbum" id="imgAlbum">
          <p class="lead" id="songTittle"></p>
          <svg onclick="anterior()" xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-skip-backward-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="M11.729 5.055a.5.5 0 0 0-.52.038L8.5 7.028V5.5a.5.5 0 0 0-.79-.407L5 7.028V5.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0V8.972l2.71 1.935a.5.5 0 0 0 .79-.407V8.972l2.71 1.935A.5.5 0 0 0 12 10.5v-5a.5.5 0 0 0-.271-.445z" />
          </svg>
          <svg onclick="play()" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" />
          </svg>
          <svg onclick="pause()" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-pause-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.25 5C5.56 5 5 5.56 5 6.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C7.5 5.56 6.94 5 6.25 5zm3.5 0c-.69 0-1.25.56-1.25 1.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C11 5.56 10.44 5 9.75 5z" />
          </svg>
          <svg onclick="siguiente()" xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-skip-forward-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="M4.271 5.055a.5.5 0 0 1 .52.038L7.5 7.028V5.5a.5.5 0 0 1 .79-.407L11 7.028V5.5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-1 0V8.972l-2.71 1.935a.5.5 0 0 1-.79-.407V8.972l-2.71 1.935A.5.5 0 0 1 4 10.5v-5a.5.5 0 0 1 .271-.445z" />
          </svg>
          <input type="range" id="time" value="0" disabled>
          <p id="ctime">00:00 - 00:00</p>
          <svg id="replay" xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
          </svg>

        </div>
      </div>
    </span>

    <table class="table table-striped" id="listaSemana">
      <thead>
        <tr>
          <th scope="col"># </th>
          <th scope="col">Canción </th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        $position = 0;
        $files = scandir("../upploads/Lista/topSemana");
        if (count($files) > 2) {
          for ($i = 2; $i < count($files); $i++) {
        ?>
            <tr>
              <th scope="row"><?php echo $i - 1 ?> </th>
              <td id="<?php echo $files[$i] ?>"><?php echo $files[$i] ?></td>
              <td><button onclick="pauseNext(<?php echo $position ?>)" type="button" class="btn btn-outline-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                    <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                  </svg>Reproducir</button></td>
            </tr>
          <?php
            $position++;
          }
        } else {
          ?>
          <td colspan="3">No se han subido canciones, pronto tendremos mas musica</td>
        <?php
        }
        ?>

      </tbody>
    </table>
    <br>
  </div>
  <br>

  <br><br>


  <br>
  <br><br>
  <<!-- Footer -->
    <footer class="bg-secondary text-center text-white">

      <div class="container p-4">

        <section class="mb-4">
          <!-- Facebook -->
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/?stype=lo&jlou=Afc6Fk4QKKkw7TUYrZnVLJgTVbucgc59QR4cs72Q8S3uxITgvQnS_MMspGIhWFmCHhowPSHDfLWe8U1opu3U9HBhhCkomwWMRuaa5KNxpdNhJg&smuh=4002&lh=Ac938tKOCp3vBR-dPCs" role="button"> <img src="img/facebook.jpg" width="30" height="30"=""><i class="fab fa-facebook-f"></i></a>
          <!-- Twitter -->
          <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/?logout=1648704785106" role="button"><img src="img/thitter.jpg" width="30" height="30"=""><i class="fab fa-twitter"></i></a>
          <!-- Google -->
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/intl/es/gmail/about/" role="button"><img src="img/gmail.jpg" width="30" height="30"=""><i class="fab fa-google"></i></a>
          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/" role="button"><img src="img/instagram.jpg" width="30" height="30"=""><i class="fab fa-instagram"></i></a>
          <!-- Section: Text -->
          <section class="mb-4">
            <p>
              Nuestra empresa está en constante renovación. Contamos con más de 20 años de experiencia.
              Nos ajustamos a las exigencias del mercado innovando la comunicación. Creando valores a nuestros productos que son de gran utilidad para clientes y agencias de publicidad.


            </p>
          </section>
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <a class="text-white" href="">2022 Copyright Radio-DSS</a>
          </div>
    </footer>

    <script>
      let controlColor = '';
      let controlador = 0;
      let table = document.getElementById('listaSemana');
      let canciones = [];
      let finder = 0;
      for (let i = 1; i < table.rows.length; i++) {
        canciones.push(
          "../upploads/Lista/topSemana/" + table.rows[i].cells[1].innerHTML
        )
      }
      let cancion;
      let timer = 0;

      const play = () => {
        if (controlador == 0) {
          controlador = 1
          cancion = new Audio(canciones[finder]);
          let tituloCancion = cancion.getAttribute('src').split('/');
          document.getElementById('songTittle').innerHTML = tituloCancion[4];
          document.getElementById(tituloCancion[4]).classList.add('text-warning');
          controlColor = tituloCancion[4];
          //###############play######################################

          const time = document.getElementById('time');
          document.getElementById('imgAlbum').classList.add('albumRotate');
          cancion.currentTime = timer;
          cancion.play();
          cancion.ontimeupdate = function(e) {
            time.value = cancion.currentTime;
            time.max = cancion.duration;
            document.getElementById('ctime').innerHTML = formatSecondsAsTime(cancion.currentTime, null) + ' - ' + formatSecondsAsTime(cancion.duration, null);
            if (cancion.currentTime === cancion.duration) {
              //ajaxFunction();
              document.getElementById('imgAlbum').classList.remove('albumRotate');
              siguiente();
            }
          }
        }
      }



      function formatSecondsAsTime(secs, format) {
        var hr = Math.floor(secs / 3600);
        var min = Math.floor((secs - (hr * 3600)) / 60);
        var sec = Math.floor(secs - (hr * 3600) - (min * 60));

        if (min < 10) {
          min = "0" + min;
        }
        if (sec < 10) {
          sec = "0" + sec;
        }

        return min + ':' + sec;
      }

      const pauseNext = (pos) => {
        timer = 0;
        if (cancion != null) cancion.pause();
        finder = pos;
        controlador = 0;
        if (controlColor == '') {
          play();
        } else {
          document.getElementById(controlColor).classList.remove('text-warning');
          play();
        }

      }

      const siguiente = () => {
        controlador = 0;
        timer = 0;
        cancion.pause();
        let tituloCancion = cancion.getAttribute('src').split('/');
        document.getElementById('imgAlbum').classList.remove('albumRotate');
        document.getElementById(controlColor).classList.remove('text-warning');
        finder++;
        if (finder == canciones.length) {
          finder = 0;
          play();
        } else {
          play();
        }
      }

      const anterior = () => {
        controlador = 0;
        timer = 0;
        cancion.pause();
        let tituloCancion = cancion.getAttribute('src').split('/');
        document.getElementById('imgAlbum').classList.remove('albumRotate');
        document.getElementById(controlColor).classList.remove('text-warning');
        finder--;
        if (finder < 0) {
          finder = canciones.length - 1;
          play();
        } else {
          play();
        }
      }

      const pause = () => {
        controlador = 0;
        timer = cancion.currentTime;
        document.getElementById('imgAlbum').classList.remove('albumRotate');
        cancion.pause();
      }

      const replay = document.getElementById('replay').addEventListener('click', () => {
        cancion.pause();
        cancion.currentTime = 0;
        cancion.play();
      })

      // Ajax function para subir la cancion escuchada 
      const ajaxFunction = () => {
        let cancion = document.getElementById('songTittle').innerText;

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {}
        };
        xmlhttp.open("GET", "../administracion/administracionModels/AdministracionHandler.php?task=scp&&titulo=" + cancion, true);
        xmlhttp.send();
      }
    </script>
    <script src="js/top_semanal.js"></script>

</body>

</html>