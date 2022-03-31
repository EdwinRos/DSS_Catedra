<?php 
  include("conexion.php");
  $eventos = "SELECT * FROM evento ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  

    <title>Eventos</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">RADIO</a>
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
                <a class="nav-link" href="#">Programas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="top_semanal.php">Top semanal</a>
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
      <br>
      <br>
      <h1 class="text-center ">Eventos</h1><br>

      <div class="container w-75">
      <table class="table table-striped">
      <thead>
          <tr>
            <th scope="col">Nombre del Evento</th>
            <th scope="col">Descripcion</th>
            </tr>
      </thead>
      <tbody>
      
          <?php $resultado = mysqli_query($conexion, $eventos);
          while($row=mysqli_fetch_assoc($resultado)){
          ?>
           <tr>
          <td><?php echo $row["titulo_evento"];?></td>
          <td><?php echo $row["detalles"];?></td>
          <?php } mysqli_free_result($resultado); ?>
        </tr>

      </table>
      </div>
      <br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br>


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

</body>       
</html>