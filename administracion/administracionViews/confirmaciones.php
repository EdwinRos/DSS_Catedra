<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../administracioIncludes/bootstrap.php'  ?>
    <link rel="stylesheet" href="../css/adminStyles.css">
    <title>Info cancion</title>
</head>
<?php include '../administracioIncludes/navbar.php' ?>

<body>
    <div class="container">
        <div class="col">
            <div class="row">

                <?php
                // confirmacion para eliminar una cancion
                if (isset($_GET["lista"])) {
                ?>
                    <span id="dialog">
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmark-dash" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M5.5 6.5A.5.5 0 0 1 6 6h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z" />
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                            </svg> <?php echo $_GET['cancion'] ?>
                        </p>

                        <p><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
                                <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z" />
                            </svg> En la lista de reproduccion de <?php echo $_GET["lista"] ?></p>
                        <div>
                            <div class="card">
                                <img src="https://media.istockphoto.com/photos/vinyl-record-picture-id134119615?k=20&m=134119615&s=612x612&w=0&h=zI6Fig1j8mbZp16CgvaDRMPHAzTaBNhhcBR0AldRXtw=" width="40" height="40" alt="" class="imgAlbum" id="imgAlbum">
                                <p class="lead"><?php echo $_GET['cancion'] ?></p>
                                <svg id="play" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" />
                                </svg>
                                <svg id="pause" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-pause-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.25 5C5.56 5 5 5.56 5 6.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C7.5 5.56 6.94 5 6.25 5zm3.5 0c-.69 0-1.25.56-1.25 1.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C11 5.56 10.44 5 9.75 5z" />
                                </svg>
                                <input type="range" id="time" value="0" disabled>
                                <p id="ctime">00:00 - 00:00</p>
                                <svg id="replay" xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                                </svg>
                            </div>
                        </div>
                    <?php
                }
                    ?>
                    <button onclick="del()" class="btn btn-outline-danger mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                        </svg></button>
                    </span>
                    <a href="homeAdministracion.php" class="btn btn-outline-success mt-3">Volver</a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        let cancion = new Audio('../../upploads/Lista/<?php echo $_GET["lista"] ?><?php echo $_GET['cancion'] ?>')




        const play = document.getElementById('play').addEventListener('click', () => {
            const time = document.getElementById('time');
            document.getElementById('imgAlbum').classList.add('albumRotate');
            cancion.play();
            cancion.ontimeupdate = function(e) {
                time.value = cancion.currentTime;
                time.max = cancion.duration;
                document.getElementById('ctime').innerHTML = formatSecondsAsTime(cancion.currentTime, null) + ' - ' + formatSecondsAsTime(cancion.duration, null);
                if (cancion.currentTime === cancion.duration) {
                    document.getElementById('imgAlbum').classList.remove('albumRotate');
                }
            }
        })



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

        const pause = document.getElementById('pause').addEventListener('click', () => {
            document.getElementById('imgAlbum').classList.remove('albumRotate');
            cancion.pause();
        })

        const replay = document.getElementById('replay').addEventListener('click', () => {
            cancion.pause();
            cancion.currentTime = 0;
            cancion.play();
        })

        const del = () => {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("dialog").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET",
                "../administracionModels/AdministracionHandler.php?task=deleteSemana&&lista=<?php echo $_GET["lista"] ?>&&cancion=<?php echo $_GET['cancion'] ?>",
                true);
            xmlhttp.send();
        }

        const closeAlert = () => {
            document.getElementById('msj').innerHTML = "";
        }
    </script>
</body>

</html>