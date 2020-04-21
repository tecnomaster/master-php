<?php

$accion = ['Assasins', 'Crash', 'Prince of Persia'];
$action_valor = '';
echo '<table><tr><td colspan=3 align=center><b>AVENTURAS</b></td></tr>';
foreach ($accion as $accion_valor) {
    echo '<tr><td align=center>'.$accion_valor.'</td></tr>';
}
echo '</table>';