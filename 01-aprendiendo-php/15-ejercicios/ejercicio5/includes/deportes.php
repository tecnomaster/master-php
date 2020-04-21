<?php

$accion = ['Fifa 19', 'PES 19', 'Moto GP'];
$action_valor = '';
echo '<table><tr><td colspan=3 align=center><b>DEPORTES</b></td></tr>';
foreach ($accion as $accion_valor) {
    echo '<tr><td align=center>'.$accion_valor.'</td></tr>';
}
echo '</table>';