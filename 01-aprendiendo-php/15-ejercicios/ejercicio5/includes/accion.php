<?php

$accion = ['GTA', 'COD', 'PUGB'];
$action_valor = '';
echo '<table><tr><td colspan=3 align=center><b>ACCIÓN</b></td></tr>';
foreach ($accion as $accion_valor) {
    echo '<tr><td align=center>'.$accion_valor.'</td></tr>';
}
echo '</table>';