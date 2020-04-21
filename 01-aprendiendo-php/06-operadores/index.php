<?php

$numero1 = 55;
$numero2 = 33;

// Operadores Aritméticos
echo '<b>Suma:</b> '.($numero1+$numero2);
echo '<br><b>Resta:</b> '.($numero1-$numero2);
echo '<br><b>Multiplicación:</b> '.($numero1*$numero2);
echo '<br><b>División:</b> '.($numero1/$numero2);
echo '<br><b>Resto:</b> '.($numero1%$numero2);

// Operadores Incrementos y Decrementos

$year=2019;

echo '<br><b>Año Actual:</b> '.$year;
$year--;
echo '<br><b>Año Anterior:</b> '.$year;
$year=$year+1;
$year++;
echo '<br><b>Año Posterior:</b> '.$year;

--$year;
echo '<br><b>Pre-decremento:</b> '.$year;
++$year;
echo '<br><b>Pre-incremento:</b> '.$year;

// Operadores de Asignación

$edad=55;

echo '<br><b>Edad:</b> '.$edad;
echo '<br><b>Edad Suma:</b> '.($edad+=5);
echo '<br><b>Edad Resta:</b> '.($edad-=5);
echo '<br><b>Edad Multiplicación:</b> '.($edad*=5);
echo '<br><b>Edad División:</b> '.($edad/=5);

?>