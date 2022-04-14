<?php
  include("conexion.php");
  $biografias = "SELECT * FROM biografia ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <title>Biografias</title>
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


  
    <section class="progra">
    <div class="container w-75">
          <h1>Biografias Artistas</h1>         
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Imagen</th>
            <th scope="col">Biografia</th>                      
          </tr>
        </thead>
        <tbody>

          <?php $resultado = mysqli_query($conexion, $biografias);
          while($row=mysqli_fetch_assoc($resultado)){
          ?>
          <tr>  
          <td><?php echo $row["id"]; ?></td>          
            <td><?php echo $row["nombre_artista"]; ?></td>
            <td><?php echo $row["url_imagen"]; ?></td>
            <td><?php echo $row["biografia"]; ?></td>           
            <?php } mysqli_free_result($resultado); ?>
          </tr>     
        </tbody>
      </table>
          </div>

   
    </section>


<br>  
<br>
<br>

<section class="progra">
<div class="container w-75">
          <h1>Biografias Staff</h1>         
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Imagen</th>
            <th scope="col">Biografia</th>                      
          </tr>
        </thead>
        <tbody>

          <?php $resultado = mysqli_query($conexion, $biografias);
          while($row=mysqli_fetch_assoc($resultado)){
          ?>
          <tr>  
          <td><?php echo $row["id"]; ?></td>          
            <td><?php echo $row["nombre_artista"]; ?></td>
            <td><?php echo $row["url_imagen"]; ?></td>
            <td><?php echo $row["biografia"]; ?></td>           
            <?php } mysqli_free_result($resultado); ?>
          </tr>     
        </tbody>
      </table>
          </div>

   
    </section><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- Footer -->
<footer class="bg-secondary text-center text-white">

  <div class="container p-4">

    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/?stype=lo&jlou=Afc6Fk4QKKkw7TUYrZnVLJgTVbucgc59QR4cs72Q8S3uxITgvQnS_MMspGIhWFmCHhowPSHDfLWe8U1opu3U9HBhhCkomwWMRuaa5KNxpdNhJg&smuh=4002&lh=Ac938tKOCp3vBR-dPCs" role="button"
        > <img src="img/facebook.jpg"  width="30" height="30"=""><i class="fab fa-facebook-f"></i
      ></a>
      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/?logout=1648704785106" role="button"
        ><img src="img/thitter.jpg"   width="30" height="30"=""><i class="fab fa-twitter"></i
      ></a>
      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/intl/es/gmail/about/" role="button"
        ><img src="img/gmail.jpg"   width="30" height="30"=""><i class="fab fa-google"></i
      ></a>
      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/" role="button"
        ><img src="img/instagram.jpg"   width="30" height="30"=""><i class="fab fa-instagram"></i
      ></a>
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