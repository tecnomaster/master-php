<?php

// Mostrar los cuadrados de los números del 1 al 40

//Modo 1
echo'<table width="50%" align="center"><tr><td><h1>Modo 1:</h1>';
for ($i = 1; $i <= 40; ++$i) {
    echo'<b>Número:</b> '.$i.' ';
    echo'<b>Cuadrado:</b> '.$i * $i.'<br>';
}
//Modo 2
$i = 1;
echo'</td><td><h1>Modo 2:</h1>';
while ($i <= 40) {
    echo'<b>Número:</b> '.$i.' ';
    echo'<b>Cuadrado:</b> '.$i * $i.'<br>';
    ++$i;
}
echo'</td></tr></table>';