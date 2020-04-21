<?php

// Añadir valores a un array mientras que su longitud sea menor a 120 y luego mostrarlo por pantalla

$secuencia = [];

for ($i = 1; $i < 120; ++$i) {
    array_push($secuencia, $i);
}
var_dump($secuencia);