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
              <a class="nav-link" href="inicio.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="biografias.html">Biografias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Programas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="top_semanal.html">Top semanal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="eventos.html">Eventos</a>
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
      <br><br>


     
      
</body>

            <footer class="text-center text-white" style="background-color: #f1f1f1;">
              <!-- Copyright -->
              <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright: Radio-DSS
              </div>
              <!-- Copyright -->
            </footer>
</html>