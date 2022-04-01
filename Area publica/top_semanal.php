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
      <h1 class="container-fluid">Top Semanal de Canciones Global</h1><br>
<br>
<div class="container w-75">
    
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col"># </th>
        <th scope="col">Canción </th>
        <th scope="col">Artista </th>
        <th scope="col">Veces Escuchadas</th>
        <th scope="col"></th>
        </tr>
    </thead>
<tbody>
    <tr>
        <th scope="row">1</th>
        <td>Lo siento BB</td>
        <td>Bad Bunny ft. Julieta Venega</td>
        <td>152.789.980</td>
        <td><a href="">Reproducir</a></td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Otro Trago</td>
        <td>Sech ft. Darell</td>
        <td>102.559.701</td>
        <td><a href="">Reproducir</a></td>
    </tr>
     <tr>
        <th scope="row">3</th>
        <td>512</td>
        <td>Mora ft. Jhay Cortez</td>
        <td>997.213</td>
        <td><a href="">Reproducir</a></td>
    </tr>
    <tr>
        <th scope="row">4</th>
        <td>Todo de ti</td>
        <td>Rauw Alejandro</td>
        <td>901.581</td>
        <td><a href="">Reproducir</a></td>
    </tr>
    <tr>
        <th scope="row">5</th>
        <td>Plan A</td>
        <td>Paulo Londra</td>
        <td>897.645</td>
        <td><a href="">Reproducir</a></td>
    </tr>
</tbody>
</table>
<button type="button" class="btn btn-primary">Ver más</button>
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

      <script src="js/top_semanal.js"></script>

</body>
</html>