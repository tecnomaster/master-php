<?php

$numero = 0;
        while ($numero <= 100) {
            echo $numero;
            if (100 != $numero) {
                echo ', ';
            }
            ++$numero;
        }
        echo "<h1> tabla de multiplicar del número {$numero} </h1>";
        $contador = 0;
        while ($contador <= 10) {
            echo "{$numero} x {$contador} = ".($numero * $contador).' <br/>';
            ++$contador;
        }
        // DO WHILE
        //do {
        //BLOQUE DE INSTUCCIONES
        //} while (condición);
        $edad = 18;
        $contador = 1;
            echo '<hr/>';
        do {
            echo "tienes acceso al local privado {$contador} <br/>";
            ++$contador;
        } while ($edad >= 18 && $contador <= 10);
        echo '<hr/>';
        echo $numero;
        for ($contador = 1; $contador <= 10; ++$contador) {
            if (101 == $numero) {
                echo '<br/> No se pueden mostrar estas operaciones prohibidas';

                break;
            }
            echo "{$numero} x {$contador} = ".($numero * $contador).'<br/>';
        }