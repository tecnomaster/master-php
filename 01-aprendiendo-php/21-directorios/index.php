<?php

if (!is_dir('carpeta de los chivos')) {
    mkdir('carpeta de los chivos', 0777) or die('No puede crear la carpeta');
} else {
    echo 'Ya esiste ostias tio!!!';
}

//Borrar el directorio
//rmdir('carpeta de los chivos');

echo '<hr><h1>Contenido de la Carpeta de los chivos:</h1>';

if ($gestor = opendir('carpeta de los chivos')) {
    while (false !== ($archivo = readdir($gestor))) {
        if ('.' !== $archivo && '..' !== $archivo) {
            echo $archivo.'<br>';
        }
    }
}