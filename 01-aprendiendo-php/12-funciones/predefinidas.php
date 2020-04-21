<?php

// Debuggear
$nombre = 'Elena Correa';
var_dump($nombre);

//Fechas
echo date('d-m-Y');
echo '</br>';
echo time();

//php.net para ver manuales de php

// Matemáticas
echo '</br>';
echo 'Raíz cuadrada de 10: '.sqrt(10);

// Número aleatorio
echo '</br>';
echo 'Número aleatorio entre 10 y 40: '.rand(10, 40);

// Número pi
echo '</br>';
echo 'Número pi: '.pi();

// Número redondeado
echo '</br>';
echo 'Redondear: '.round(7.891234, 1);

// Tipo de variable
echo '</br>';
echo gettype($nombre);

//Detectar tipado
echo '</br>';
if (is_string($nombre)) {
    echo 'Esa variable es un string';
}
if (is_float($nombre)) {
    echo '</br>';
    echo 'La variable nombre no es un número con decimales';
}

//Comprobar si existe una variable
echo '</br>';
if (isset($edad)) {
    echo 'La variable existe';
} else {
    echo 'La variable NO existe';
}

//Limpiar espacios
echo '</br>';
$frase = '     mi contenido     ';
var_dump(trim($frase));

//Eliminar variables o índices de arrays
$year = 2020;
unset($year);

//Comprobar variable vacía
$texto = ''; //Aquí puede ser null o false
if (empty($texto)) {
    echo 'La variable texto está vacía';
    echo '</br>';
} else {
    echo '</br>';
    echo 'La variable texto tiene contenido';
}

//Contar caracteres de un string o cadena
$cadena = '12345';
echo strlen($cadena);
echo '</br>';

//Encontrar caracter
$frase = 'La vida es bella';
echo strpos($frase, 'vida');
echo '</br>';

//Remplazar contenido de un string
$frase = str_replace('vida', 'moto', $frase);
echo $frase;
echo '</br>';

//MAYÚSCULAS y minúsculas
echo strtoupper($frase);
echo '</br>';
echo strtolower($frase);