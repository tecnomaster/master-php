<?php

$archivo = $_FILES['archivo'];
//var_dump($archivo);
//die();
$nombre = $archivo['name'];
$tipo = $archivo['type'];
$error = $archivo['error'];

if ('image/jpg' == $tipo || 'image/jpeg' == $tipo || 'image/gif' == $tipo || 'image/png' == $tipo) {
    if (!is_dir('images')) {
        mkdir('images', 0777) or die('No puede crear la carpeta');
    }
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    header('Refresh:5; URL=index.php');
    echo 'Imagen subida con éxito!!';
} else {
    header('Refresh:5; URL=index.php');
    echo '<h1>No es una imagen ... ESTO ES SOLO PARA CARGAR IMÁGENES ANIMAL!!</h1>';
}