<?php

$resultado = 0;
if (isset($_POST['numero1'], $_POST['numero2'], $_POST['op'])) {
    if ('+' == $_POST['op']) {
        $resultado = $_POST['numero1'] + $_POST['numero2'];
    } elseif ('-' == $_POST['op']) {
        $resultado = $_POST['numero1'] - $_POST['numero2'];
    } elseif ('*' == $_POST['op']) {
        $resultado = $_POST['numero1'] * $_POST['numero2'];
    } elseif ('/' == $_POST['op']) {
        $resultado = $_POST['numero1'] / $_POST['numero2'];
    } else {
        echo 'WTF!!!';
        die();
    }
}

header("Location:ejercicio3.php?resultado={$resultado}");