<?php
/*Variables locales: Son las que se definen dentro de una función y no pueden ser usadas
fuera de la función, solo están disponibles dentro a menos que hagamos un return
*
Variables Globales: Son las que se declaran fuera de una función y están disponobles dentro
y fuera de las funciones
 */
 //$Frase='acá va la frase';
//echo $Frase;
 //Funciones variables

function buenasDias()
{
    return  'buenos días';
}

function buenasTardes()
{
    return  'Qué tal ha ido la comida';
}

 function buenasNoches()
 {
     return  '¿Te vas a dormir ya? Buenas noches';
 }

$horario = 'Noches';
$MiFuncion = 'buenas'.$horario;
echo $MiFuncion();