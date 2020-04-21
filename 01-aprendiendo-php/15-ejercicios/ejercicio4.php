<?php

// Crear script con 4 variables = array, string, int, booleano y que imprima un mensaje según el tipo de variable que sea

$mi_array = ['a', 'b', 'c', 'd', 'e'];
$mi_string = 'Esta es una cadena';
$mi_int = 5;
$mi_booleano = true;

function obtenerTipo($variable)
{
    if ('array' == $variable) {
        echo 'La variable es un arreglo<br>';
    } elseif ('string' == $variable) {
        echo 'La variable es una cadena<br>';
    } elseif ('integer' == $variable) {
        echo 'La variable es un entero<br>';
    } elseif ('boolean' == $variable) {
        echo 'La variable es un booleano<br>';
    }
}
$variable = gettype($mi_array);
obtenerTipo($variable);
$variable = gettype($mi_string);
obtenerTipo($variable);
$variable = gettype($mi_int);
obtenerTipo($variable);
$variable = gettype($mi_booleano);
obtenerTipo($variable);