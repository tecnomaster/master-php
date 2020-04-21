<?php

// Iniciar la sesión y la conexión a la BD
require_once 'includes/conexion.php';

// Recoger los datos del formulario
if (isset($_POST)) {
    // Borrar error antiguo
    if (isset($_SESSION['error_login'])) {
        session_unset();
    }
    // Recoger datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    // Hacer consulta a la base de datos para comprobar email/contraseña (credenciales)
    $sql = "SELECT * FROM usuarios WHERE email = '{$email}'";
    $login = mysqli_query($db, $sql);

    if ($login && 1 == mysqli_num_rows($login)) {
        $usuario = mysqli_fetch_assoc($login);

        // Comprobar la contraseña
        $verify = password_verify($password, $usuario['password']);

        if ($verify) {
            // Utilizar una sesión para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;
        } else {
            // Si hay alguna falla, enviar una sesión con el fallo
            $_SESSION['error_login'] = 'Login incorrecto!!';
        }
    } else {
        // Si hay alguna falla, enviar una sesión con el fallo
        $_SESSION['error_login'] = 'Login incorrecto!!';
    }
}
// Redirigir al index
header('Location: index.php');