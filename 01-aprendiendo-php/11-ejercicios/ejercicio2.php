<?php

// Mostrar los números pares hasta el 100

//Modo 1
echo'<b>Modo 1:</b> ';
for ($i = 1; $i <= 50; ++$i) {
    echo($i * 2).', ';
}

//Modo 2
echo'<br><b>Modo 2:</b> ';
for ($i = 1; $i <= 100; ++$i) {
    if (0 == $i % 2) {
        echo $i.', ';
    }
}