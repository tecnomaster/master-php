<?php

// Obtener los datos del POST si es que existen

// Conexión a la base de datos
require_once 'includes/conexion.php';

if (isset($_POST)) {
    $nombres = isset($_POST['nombres']) ? mysqli_real_escape_string($db, $_POST['nombres']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

    // Arreglo de Errores
    $errores = [];

    // Validar datos antes de guardarlos en la base de datos

    // Validar campo nombre
    if (!empty($nombres) && !is_numeric($nombres) && !preg_match('/[0-9]/', $nombres)) {
        $nombres_validado = true;
    } else {
        $nombres_validado = false;
        $errores['nombres'] = 'El nombre no es válido';
    }

    // Validar campo apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match('/[0-9]/', $nombres)) {
        $apellidos_validado = true;
    } else {
        $apellidos_validado = false;
        $errores['apellidos'] = 'Los apellidos no son válidos';
    }

    // Validar campo email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = 'El email no es válido';
    }

    // Validar campo contraseña
    if (!empty($password)) {
        $password_validado = true;
    } else {
        $password_validado = false;
        $errores['password'] = 'La contraseña está vacía';
    }

    $guardar_usuario = false;

    if (0 == count($errores)) {
        // Insertar datos en la tabla
        $guardar_usuario = true;

        // Cifrar la contraseña
        $password_seguro = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
        /*var_dump($password);
        var_dump($password_seguro);
        var_dump(password_verify($password, $password_seguro));
        die();*/

        // Insertar el usuario en la tabla usuarios de la BD
        $sql = "INSERT INTO usuarios VALUES(null, '{$nombres}', '{$apellidos}', '{$email}', '{$password_seguro}', CURDATE())";
        $guardar = mysqli_query($db, $sql);
        //var_dump(mysqli_error($db));
        //die();

        if ($guardar) {
            $_SESSION['completado'] = 'El registro se ha completado con éxito.';
        } else {
            $_SESSION['errores']['general'] = 'Falla al guardar el usuario!';
        }
    } else {
        $_SESSION['errores'] = $errores;
    }
}

header('Location: index.php');