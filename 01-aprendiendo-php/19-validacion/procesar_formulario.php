<?php
$error = '';
if (!empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
    $error = 'ok';
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (!is_string($nombres) || preg_match('/[0-9]/', $nombres)) {
        $error = $error.', nombres';
    }

    if (!is_string($apellidos) || preg_match('/[0-9]/', $apellidos)) {
        $error = $error.', apellidos';
    }

    if (!is_int($edad) || preg_match('/[A-Za-z ]/', $edad)) {
        $error = $error.', edad';
    }

    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = $error.', email';
    }

    if (strlen($pass) < 8) {
        $error = $error.', contraseña';
    }
} else {
    $error = 'faltan_valores';
}

if ('ok' != $error) {
    $error = substr($error, 4);
    header("Location:index.php?error={$error}");
}
?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Validar Formularios en PHP</title>
</head>

<body>
    <h1>Validar Formularios en PHP</h1>
    <?php
    echo '<b>Nombres:</b> '.$nombres;
    echo '<br><b>Apellidos:</b> '.$apellidos;
    echo '<br><b>Edad:</b> '.$edad;
    echo '<br><b>Email:</b> '.$email;
    echo '<br><b>Contraseña:</b> '.$pass;
    ?>
</body>

</html>