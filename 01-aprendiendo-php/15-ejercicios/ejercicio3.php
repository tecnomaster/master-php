<?php

// Comprobar variable vacía y si lo está rellenar con texto en minúsculas y mostrarlo en mayúsculas y negritas

$variable = '';

if (!$variable) {
    $variable = 'pepe';
    $mayus = strtoupper($variable);
    echo 'En mayúsculas: <b>'.$mayus.'</b>';
}