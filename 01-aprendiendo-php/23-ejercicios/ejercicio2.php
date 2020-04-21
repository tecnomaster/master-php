<?php

/*
1. Una función
2. Validar un email con filter_var
3. Recoger variable por get y validarla
4. Mostrar el resultado
*/
function ValidarEmail($email)
{
    if (is_string($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }

    return false;
}

if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $resultado = ValidarEmail($email);
    if ($resultado) {
        echo "El email <b>{$email}</b> esta <b>correcto</b>";
    } else {
        echo "El email <b>{$email}</b> esta <b>incorrecto</b>";
    }
} else {
    echo 'DEBES ENVIAR UN PARÁMETRO POR GET';
}