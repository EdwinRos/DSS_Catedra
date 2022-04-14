<?php
include("conexion.php");
$programas = "SELECT * FROM programa ";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/inicio.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Programas</title>
  <style>
    .masthead {
      height: 40vh;
      min-height: 500px;
      background-image: url('https://img.freepik.com/foto-gratis/casete-vintage-minimalista-vista-frontal_23-2148695292.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
  </style>
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
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <h1 class="fw-light" style="color: white;">Programas que actualmente se emiten en la radio</h1>
          <p class="lead" style="color: white;">Lista de programas que se emiten 🍷</p>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <h1 class="display-4">Estos son los programas actuales 📻</h1>
    <div class="row">
      <?php
      $resultado = mysqli_query($conexion, $programas);
      while ($row = mysqli_fetch_assoc($resultado)) {
      ?>
        <div class="col-md">
        <div class="card mt-3 mb-3" style="width: 18rem;">
            <img src="<?php echo $row["url_imagen"]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row["titulo"]; ?></h5>
              <hr>
              <p class="card-text">
              <p class="lead"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date-fill" viewBox="0 0 16 16">
                  <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zm5.402 9.746c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2z" />
                  <path d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm-2.89-5.435v5.332H5.77V8.079h-.012c-.29.156-.883.52-1.258.777V8.16a12.6 12.6 0 0 1 1.313-.805h.632z" />
                </svg> <?php echo $row["dias_emision"]; ?></p>
              <p class="lead"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                  <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                  <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                </svg> <?php echo date("g:i a", strtotime($row["hora_emision"] . "UTC")); ?></p>
              <p class="lead"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                  <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
                </svg> <?php echo $row["dj_programa"]; ?></p>
              </p>
            </div>
          </div>
        </div>
      <?php
      }
      mysqli_free_result($resultado);
        ?>
    </div>
  </div>

    <!-- 
      Esto es lo que ya tenian   
      
      <section class="progra">
          <h1>Programación semanal</h1>   
          <div class="container w-75">    
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Titulo</th>
            <th scope="col">Día</th>
            <th scope="col">Hora</th>
            <th scope="col">Locutor</th>
            <th scope="col">Imagen</th>           
          </tr>
        </thead>
        <tbody>

          <?php $resultado = mysqli_query($conexion, $programas);
          while ($row = mysqli_fetch_assoc($resultado)) {
          ?>
          <tr>  
          <td><?php echo $row["id"]; ?></td>          
            <td><?php echo $row["titulo"]; ?></td>
            <td><?php echo $row["dias_emision"]; ?></td>
            <td><?php echo $row["hora_emision"]; ?></td>
            <td><?php echo $row["dj_programa"]; ?></td>
            <td><?php echo $row["url_imagen"]; ?></td>
            <?php }
          mysqli_free_result($resultado); ?>
          </tr>     
        </tbody>
      </table>     
    </section>
    <br>
    <section class="progra">
    <div class="container w-75">
          <h1>Entrevistas de la semana</h1>         
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Titulo</th>
            <th scope="col">Día</th>
            <th scope="col">Hora</th>
            <th scope="col">Locutor</th>
            <th scope="col">Imagen</th>           
          </tr>
        </thead>
        <tbody>

          <?php $resultado = mysqli_query($conexion, $programas);
          while ($row = mysqli_fetch_assoc($resultado)) {
          ?>
          <tr>  
          <td><?php echo $row["id"]; ?></td>          
            <td><?php echo $row["titulo"]; ?></td>
            <td><?php echo $row["dias_emision"]; ?></td>
            <td><?php echo $row["hora_emision"]; ?></td>
            <td><?php echo $row["dj_programa"]; ?></td>
            <td><?php echo $row["url_imagen"]; ?></td>
            <?php }
          mysqli_free_result($resultado); ?>
          </tr>     
        </tbody>
      </table>   
        </div>  
          </div>
    </section> -->
    <br><br><br><br><br><br><br><br><br><br><br><br>
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

</body>

</html>