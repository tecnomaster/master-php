<?php

/* Hacer programa en php que tenga un array con 8 números enteros y que haga lo siguiente:
- Recorrerlo y Mostrarlo
- Ordenarlo y Mostrarlo
- Mostrar su longitud
- Buscar algún elemento
*/

function mostrarArray($numeros)
{
    $resultado = '';
    foreach ($numeros as $numero) {
        $resultado .= $numero.', ';
    }

    return $resultado;
}

$numeros = [1, 3, 2, 4, 5, 6, 7, 8];

echo '<b>- Recorrerlo y Mostrarlo</b><br>';
echo mostrarArray($numeros);
echo '<br>';
echo '<b>- Ordenarlo y Mostrarlo</b><br>';
asort($numeros);
echo mostrarArray($numeros);
echo '<br>';
echo '<b>- Mostrar su longitud</b><br>';
echo count($numeros);
echo '<br>';
echo '<b>- Buscar algún elemento</b><br>';
$i = array_search('4', $numeros);
echo $i;