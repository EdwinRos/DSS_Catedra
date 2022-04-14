<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <title>Musica</title>
    <style>
        .masthead {
            margin-top: 10px;
            height: 40vh;
            min-height: 500px;
            background-image: url('https://th.bing.com/th/id/R.1849e6803d8f1c2d2e8dc05e9ac6fb22?rik=1VZeXAWoYTct1A&riu=http%3a%2f%2fgetwallpapers.com%2fwallpaper%2ffull%2f0%2fc%2f3%2f1241259-recording-studio-desktop-wallpaper-1920x1080-1080p.jpg&ehk=5JFnLh60gntv%2bs8oLk3Uft91Jl9hTlDsf%2bUh6iU17GI%3d&risl=&pid=ImgRaw&r=0');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .imgOpt {
            margin-top: 30px;
            margin-bottom: 30px;
            width: 400px;
            height: 500px;
            border-radius: 5%;
            cursor: pointer;
        }

        .imgOpt:hover {
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 45%;
            transition: 0.4s;
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
                    <h1 class="fw-light" style="color: white;">Listas de reproduccion actuales de la radio</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="d-flex justify-content-evenly">
            <img  id="semana" src="https://i.ibb.co/FYxfKKN/musica-de-la-semana.png" class="imgOpt" alt="musica-de-la-semana" border="0">
            <img  id="topM" src="https://i.ibb.co/FqLhXnk/musica-del-top.png" class="imgOpt" alt="musica-del-top" border="0">
        </div>
    </div>
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
        const semana = document.getElementById('semana').addEventListener('click', () => {
            window.location.replace('semanal.php');
        }) 

        const topM = document.getElementById('topM').addEventListener('click', () => {
            window.location.replace('top.php');
        })

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>

</html>