<?php
require_once '../administracionModels/AdministracionModel.php';

class administracionView extends AdministracionModel
{
    public function upload()
    {
        $results = $this->subidaCancion();
        echo "<div class='alert alert-secondary mt-3'>";
        foreach ($results as $message) {
            echo $message . "<br/>";
        }
        echo "</div>";
    }

    public function cargarCanciones($lista)
    {
        $results = $this->obtenerCancionesActualesSemana($lista);
        echo "<ul class='list-group'>";
        if (count($results) > 2) {
            for ($i = 2; $i < count($results); $i++) {
                echo "<li class='list-group-item pt-3 pb-5'>$results[$i] <a href='confirmaciones.php?lista=$lista&&cancion=$results[$i]' class='btn btn-outline-info float-end'>Detalles</a> </li>";
            }
        } else {
            echo "<li class='list-group-item'>Aun no se ha subido una cancion!</li>";
        }
        echo "<ul class='list-group'>";
    }

    public function publicarPrograma()
    {
        $result = $this->publicarProgramaBD($_POST['titulo'],$_POST['diasEmision'], $_POST['horaEmision'], $_POST['dj'], $_POST['urlImg']);
        echo "<div class='alert alert-secondary mt-3' role='alert'>
           ".$result."
        </div>";
    }

    public function listarProgramasPublicados(){
        $result = $this->listaProgramas();
        echo "<ul class='list-group'>"; 
        if(count($result) > 0){
           foreach ($result as $programa) {
            echo "<li class='list-group-item pt-3 pb-5'><b>Título: </b>".$programa['titulo']." <b>DJ: </b>".$programa['dj_programa']." <b>Dias de emision: </b>".$programa['dias_emision']." <a href='programaDetalles.php?titulo=".$programa['titulo']."&&dias=".$programa['dias_emision']."&&hora=".$programa['hora_emision']."&&dj=".$programa['dj_programa']."&&img=".$programa['url_imagen']."&&id=".$programa['id']."' class='btn btn-outline-success float-end'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye-fill' viewBox='0 0 16 16'>
            <path d='M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z'/>
            <path d='M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z'/>
          </svg></a> </li>";
           }     
        }else{
            echo "<li class='list-group-item'>Aun no se han publicado programas !</li>";
        }
        echo "<ul class='list-group'>";
    }

    public function identificarse()
    {
        $result = $this->iniciarSesion($_POST['usuario'], sha1($_POST['password']));
        echo "<div class='alert alert-danger mt-3'>";
        echo $result['error'];
        echo "</div>";
    }

////////////////////////////////////////////////////////////////
    public function registrarEvento(){
        $result = $this->insertarEvento($_POST['tituloEvento'],$_POST['detalleEvento']);
        
        $mensaje = <<< MENSAJE
        <div class='alert alert-secondary mt-3'>
            $result
        </div>
        MENSAJE;

        echo $mensaje;
    }

    public function listarEventos(){
        $results = $this->listadoEvento();
        echo "<ul class='list-group'>"; 
        if(count($results) > 0){
          foreach ($results as $eventos) {
            # code...
             echo "<li class='list-group-item pt-3 pb-5'><b> Titulo Evento: </b><br>". $eventos['titulo_evento'] ."<a href='eventosDetalles.php?id=".$eventos['id']."&&titulo_evento=".$eventos['titulo_evento']."&&detalles=".$eventos['detalles']."' class='btn btn-outline-success float-end'>Ver</a>   <br><b>Detalles del Evento: </b><br> ". $eventos ['detalles']."   </li>"; 
          }
        }else{
            echo "<li class='list-group-item'>Aun no se han publicado eventos !</li>";
        }
        echo "</ul class='list-group'>"; 
    }



    /////////////////////////////////////////////////////////////////
public function registrarBiografia(){
    $result = $this->insertarBio($_POST['nombre_artista'],$_POST['url_imagen'],$_POST['biografia']);
    $mensaje =
        <<< MENSAJE
    <div class='alert alert-secondary mt-3'>
    $result
</div>
MENSAJE;

        echo $mensaje;

}


public function listarBiografia(){
    $results = $this->listaBio();
    echo "<ul class='list-group'>"; 
    if(count($results) > 0){
        foreach($results as $biografia){
            echo "<li class='list-group-item pt-3 pb-5'><b>Nombre del Artista: </b><br>". $biografia['nombre_artista']."<a href='biografiaDetalles.php?id=".$biografia['id']."&&nombre_artista=".$biografia['nombre_artista']."&&url_imagen=".$biografia['url_imagen']."&&biografia=".$biografia['biografia']."'class='btn btn-outline-success float-end'>Ver</a> 
            <br> <b>Biografia: </b><br>" . $biografia ['biografia']." </li>";
        }
    }else{
        echo "<li class='list-group-item'>Aun no se han publicado Biografias !</li>";
    }
    echo "</ul>"; 


}
}


