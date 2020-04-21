<?php

$cantantes = ['David Bisbal', 'José José', 'La tigresa del oriente', 'Wendy Sulca'];
$numeros = [1, 5, 2, 8, 3, 9, 4];

// Ordenar
echo'asort:';
asort($cantantes);
var_dump($cantantes);

echo'<hr>';

echo'arsort:';
arsort($cantantes);
var_dump($cantantes);

echo'<hr>';

echo'sort con texto:';
sort($cantantes);
var_dump($cantantes);

echo'<hr>';

echo'sort con números:';
sort($numeros);
var_dump($numeros);

// Añadir Elementos

echo'<hr>';

echo'Añadir básico:';
$cantantes[] = 'Frank Sinatra';
var_dump($cantantes);

echo'<hr>';

echo'Añadir con array_push:';
array_push($cantantes, 'Shakira');
var_dump($cantantes);

// Eliminar Elementos

echo'<hr>';

echo'Eliminar con array_pop:';
array_pop($cantantes);
var_dump($cantantes);

echo'<hr>';

echo'Eliminar con unset:';
unset($cantantes[1]);
var_dump($cantantes);

// Elementos Aleatorios

echo'<hr>';

echo'Mostrar elemento aleatorio con array_rand:<br>';
$i = array_rand($cantantes);
echo $cantantes[$i];

// Voltear Elementos

echo'<hr>';

echo'Voltear elementos con array_reverse:';
var_dump(array_reverse($cantantes));

// Buscar Elementos

echo'<hr>';

echo'Buscar elementos  con array_search:<br>';
$i = array_search('La tigresa del oriente', $cantantes);
echo $i;

// Contar Elementos

echo'<hr>';

echo'Contar elementos  con count:<br>';
$i = count($cantantes);
echo $i;

echo'<hr>';

echo'Contar elementos  con sizeof:<br>';
$i = sizeof($cantantes);
echo $i;