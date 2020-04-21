<?php
require_once 'coche.php';

// Crear un objeto / Instanciar la clase
$coche = new Coche('Morado', 'Lexus', 'Trigaláctico', 200, 200, 5);
$coche1 = new Coche('Azul', 'Lamborgini', 'Miura', 250, 300, 2);
$coche2 = new Coche('Verde', 'Mazerati', 'Repampanos', 300, 400, 3);
$coche3 = new Coche('Naranja', 'Lotus', 'Notes', 400, 600, 1);

echo $coche->mostrarInformacion($coche1);
//echo $coche->mostrarInformacion("Ejemplo de otro tipo de dato");

//var_dump($coche->getModelo());
//var_dump($coche);
//var_dump($coche1);
//var_dump($coche2);
//var_dump($coche3);