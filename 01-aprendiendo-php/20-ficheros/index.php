<?php

$archivo = fopen('fichero.txt', 'a+');

while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo '<b>Resultado: </b>'.$contenido.'<br>';
}
//fputs($archivo, chr(13).chr(10));
fwrite($archivo, 'Sepelio der chivo'.PHP_EOL);
//fputs($archivo, chr(13).chr(10));
fwrite($archivo, 'Er chivo sube al cielo de chivos'.PHP_EOL);
fclose($archivo);
copy('fichero.txt', 'fichero2.txt') or die('No puede copiar er cuento der chivo');
rename('fichero2.txt', 'fichero3.txt') or die('No puede renombrar er cuento der chivo');
unlink('fichero3.txt') or die('No puede copiar er cuento der chivo');

if (!file_exists('fichero.txt')) {
    echo 'El archivo 3 fué eliminado';
} else {
    echo 'Repámpanos!!!!';
}