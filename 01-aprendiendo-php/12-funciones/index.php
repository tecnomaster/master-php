<?php

//Ejemplo 1
//Ver el 11.1
function muestraNombres()
{
    echo 'Víctor Robles </br>';
    echo 'Elena Correa </br>';
    echo 'Andrés Yepes </br>';
}
muestraNombres();

//Ejemplo 2
function tabla($numero)
{
    echo '<h3>Tabla de multiplicar del número: '.$numero.'</h3>';
    for ($i = 1; $i <= 10; ++$i) {
        $operacion = $numero * $i;
        echo "{$numero} x {$i} = {$operacion} </br>";
    }
}

tabla(55);
/*
//Ejemplo 3
function calculadora2($numero1, $numero2)
{
    //Conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    echo "<b>Suma:</b> {$suma} </br>";
    echo "<b>Resta:</b>  {$resta} </br>";
    echo "<b>Multiplicacion:</b>  {$multiplicacion} </br>";
    echo "<b>División:</b>  {$division} </br>";
}
calculadora(10, 30);
*/
function calculadora($numero1, $numero2, $negrita)
{
    //Conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    if ($negrita) {
        echo '<h1>';
    }
    echo "<b>Suma:</b> {$suma} </br>";
    echo "<b>Resta:</b>  {$resta} </br>";
    echo "<b>Multiplicación:</b>  {$multiplicacion} </br>";
    echo "<b>División:</b>  {$division} </br>";
    if ($negrita) {
        echo '</h1>';
    }
}

calculadora(10, 30, true);
calculadora(10, 30, false);

function getNombre($nombre)
{
    return "El nombre es: {$nombre}";
}

function getApellidos($apellido)
{
    return "El apellido es: {$apellido}";
}

function devuelveElNombre($nombre, $apellido)
{
    return getNombre($nombre).'<br/>'."Los apellidos son: {$apellido}<br/>";
}

echo devuelveElNombre('Nathalia', 'Flórez');
echo getNombre('Yeidy');