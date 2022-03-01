<?php
include 'administracionView.php';
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Iniciar sesion</title>
    <style>
        body {
            background-color: rgba(111, 105, 108, 0.8);
        }

        .contenedor {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .carta-login {
            border-radius: 10px;
            background-color: white;
        }

        .campoFormulario {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
        }

        .user-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
<section>
    <div class="container contenedor">
        <div class="row carta-login">
            <div class="col-md" style="margin: 0; padding: 0;">
                <img src="https://i.ibb.co/HLS55y8/png-login.jpg" class="img-fluid" alt="Banner login"/>
            </div>
            <div class="col-md">
                <div class="row campoFormulario">
                    <form method="post" action="login.php">
                        <h1 class="display-4 text-center">Ingrese sus credenciales</h1>
                        <img src="https://optimizehq.imgix.net/old-optimize-imgix/authors/author-image-placeholder.png?w=156&dpr=2&auto=format"
                             class="mx-auto d-block img-fluid user-img mt-3" alt="user-img"/>
                        <div class="form-group mt-3 ">
                            <label for="usuario" class="h5">Usuario</label>
                            <input type="text" class="form-control" id="usuario" placeholder="Ingrese su usuario"
                                   name="usuario" required/>
                        </div>
                        <div class="form-group mt-3 ">
                            <label for="password" class="h5">Contraseña</label>
                            <input type="password" class="form-control" id="password"
                                   placeholder="Ingrese su contraseña" name="password" required/>
                        </div>
                        <div class="row mt-3 pl-3">
                            <input type="submit" class="btn btn-primary submit" value="ingresar" name="action"/>
                            <?php
                            if (isset($_POST['password']) && $_POST['usuario']) {
                                $login = new administracionView();
                                $login->iniciarSesion();
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>