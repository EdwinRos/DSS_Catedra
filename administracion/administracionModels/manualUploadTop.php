<?php

// Count total files
$countfiles = count($_FILES['file']['name']);
$url = "../../upploads/Lista/topSemana/";
$estado = 0;
for ($i = 0; $i < $countfiles; $i++) {
    $filename = $_FILES['file']['name'][$i];
    $cancionTipe = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $targetDir = $url . $filename;
    if (file_exists($targetDir) || $cancionTipe != 'mp3' && $cancionTipe != 'flac') {
        $estado++;
    } else {
        if (!move_uploaded_file($_FILES['file']['tmp_name'][$i], $url . $filename)) {
            $estado++;
        }
    }
    // Upload file
}
if ($estado > 0) {
    header('LOCATION: ../administracionViews/top.php?m=1');
} else {
    header('LOCATION: ../administracionViews/top.php');
}
