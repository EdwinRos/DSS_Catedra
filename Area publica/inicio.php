<?php include('conexion.php');
$sql = "SELECT `titulo`, `conteo` FROM `cancion` ORDER BY `cancion`.`conteo` DESC LIMIT 0 ,10";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/inicio.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Inicio</title>
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

  <h1 class="cancionesmes">RADIO - DSS</h1>
  <br>
  <div class="container navbar-light bg-light">

    <div class="card h-100">
      <img src="img/banner.jpg" class="card-img-top" alt="...">
      <p class="text_banner">Nuestra Radio es con un formato para todo el publico con música contenporanea, convirtiendose
        así en una de de las estaciones de los grandes exitos, aquí podrás encontrar los tops mas recientes, informacion
        sobre cantantes y nuestros locutores como tambien diferentes eventos.
      </p>

    </div>




    <br>
    <br>
    <br>
    <h1 class="container-fluid">Canciones mas escuchadas en El Salvador</h1>
    <br>

    <table class="table">
      <tr>
        <th scope="col">N°</th>
        <th scope="col">titulo </th>
        <th scope="col">Numero de veces escuchada</th>
      </tr>
      <tbody>
        <?php
        $numero = 0;
        $resultado = mysqli_query($conexion, $sql);
        while ($row = mysqli_fetch_assoc($resultado)) {
          $numero++
        ?>
          <tr>
            <td><?php echo $numero == 1 ? '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>' : '' ?> <?php echo $numero ?></td>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-file-music-fill" viewBox="0 0 16 16">
                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-.5 4.11v1.8l-2.5.5v5.09c0 .495-.301.883-.662 1.123C7.974 12.866 7.499 13 7 13c-.5 0-.974-.134-1.338-.377-.36-.24-.662-.628-.662-1.123s.301-.883.662-1.123C6.026 10.134 6.501 10 7 10c.356 0 .7.068 1 .196V4.41a1 1 0 0 1 .804-.98l1.5-.3a1 1 0 0 1 1.196.98z" />
              </svg> <?php echo $row['titulo'] ?></td>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-earbuds" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6.825 4.138c.596 2.141-.36 3.593-2.389 4.117a4.432 4.432 0 0 1-2.018.054c-.048-.01.9 2.778 1.522 4.61l.41 1.205a.52.52 0 0 1-.346.659l-.593.19a.548.548 0 0 1-.69-.34L.184 6.99c-.696-2.137.662-4.309 2.564-4.8 2.029-.523 3.402 0 4.076 1.948zm-.868 2.221c.43-.112.561-.993.292-1.969-.269-.975-.836-1.675-1.266-1.563-.43.112-.561.994-.292 1.969.269.975.836 1.675 1.266 1.563zm3.218-2.221c-.596 2.141.36 3.593 2.389 4.117a4.434 4.434 0 0 0 2.018.054c.048-.01-.9 2.778-1.522 4.61l-.41 1.205a.52.52 0 0 0 .346.659l.593.19c.289.092.6-.06.69-.34l2.536-7.643c.696-2.137-.662-4.309-2.564-4.8-2.029-.523-3.402 0-4.076 1.948zm.868 2.221c-.43-.112-.561-.993-.292-1.969.269-.975.836-1.675 1.266-1.563.43.112.561.994.292 1.969-.269.975-.836 1.675-1.266 1.563z" />
              </svg> <?php echo $row['conteo'] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

    <a href="top_semanal.php">
      <a href="top.php" class="btn btn-primary">Escucha la musica en el top, ahora !!</a>
    </a>
  </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>




  <!-- Footer -->
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


  <script src="js/script.js"></script>

</body>

</html>