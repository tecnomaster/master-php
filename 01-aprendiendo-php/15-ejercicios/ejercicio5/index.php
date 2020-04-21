<?php

/* Crear array con contenido de la tabla:
ACCIÓN  AVENTURAS   DEPORTES
GTA     ASSASINS    FIFA 19
COD     CRASH       PES 19
PUGB    PRINCE OF
        PERSIA      MOTO GP

*/
echo '<b>MÉTODO 1:</b>';
echo '<table border=1><tr><td colspan=3 align=center><b>JUEGOS</b></td></tr>';
echo '<tr><td align=center>';
include 'includes/accion.php';
echo '</td>';
echo '<td align=center>';
include 'includes/aventuras.php';
echo '</td>';
echo '<td align=center>';
include 'includes/deportes.php';
echo '</td></tr>';
echo '</table>';

echo '<br><b>MÉTODO 2:</b>';

$tabla = [
    'ACCIÓN' => ['GTA', 'COD', 'PUGB'],
    'AVENTURAS' => ['Assasins', 'Crash', 'Prince of Persia'],
    'DEPORTES' => ['Fifa 19', 'PES 19', 'Moto GP'],
];

$categorias = array_keys($tabla);

echo '<table border=1><tr><td colspan=3 align=center><b>JUEGOS</b></td></tr><tr>';
include 'includes/encabezados.php';
echo '</tr><tr>';
include 'includes/accion2.php';
echo '</tr><tr>';
include 'includes/aventuras2.php';
echo '</tr><tr>';
include 'includes/deportes2.php';
echo '</tr></table>';