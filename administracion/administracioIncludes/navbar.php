<?php
session_start();

if(!isset($_SESSION['usuario']))  header('LOCATION: ../index.php');

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Universidad_don_bosco.jpg/800px-Universidad_don_bosco.jpg" alt="" width="50" height="50"> Universidad Don Bosco</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Acciones
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="homeAdministracion.php">Canciones de la semana</a></li>
            <li><a class="dropdown-item" href="top.php">Top Canciones</a></li>
            <li><a class="dropdown-item" href="eventos.php">Eventos</a></li>
            <li><a class="dropdown-item" href="biografias.php">Biografias</a></li>
            <li><a class="dropdown-item" href="programas.php">Programas</a></li>
          </ul>
        </li>
      </ul>
      <form action="../administracionControllers/AdministracionController.php" method="POST" class="d-flex">
        <span class="me-3"><p class="lead">Bienvenid@ : <b><?php echo $_SESSION['usuario'] ?></b></p></span>
        <input type="submit" class="btn btn-outline-danger" value="salir" name="action"/>
      </form>
    </div>
  </div>
</nav>
