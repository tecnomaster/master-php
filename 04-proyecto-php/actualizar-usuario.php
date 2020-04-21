<?php

// Obtener los datos del POST si es que existen

// Conexión a la base de datos
require_once 'includes/conexion.php';

if (isset($_POST)) {
    $nombres = isset($_POST['nombres']) ? mysqli_real_escape_string($db, $_POST['nombres']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;

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

    $guardar_usuario = false;

    if (0 == count($errores)) {
        // Insertar datos en la tabla
        $guardar_usuario = true;
        
        // Comprobar si el email ya existe
        $sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
		$isset_email = mysqli_query($db, $sql);
		$isset_user = mysqli_fetch_assoc($isset_email);
		
	if($isset_user['id'] == $usuario['id'] || empty($isset_user)){
        
            // Actualizar el usuario en la tabla usuarios de la BD
            $usuario = $_SESSION['usuario'];
            $sql = "UPDATE usuarios SET ".
                    "nombre = '$nombres', ".
                    "apellidos = '$apellidos', ".
                    "email = '$email' ".
                    "WHERE id = ".$usuario['id'];

            $guardar = mysqli_query($db, $sql);

            //var_dump(mysqli_error($db));
            //die();

            if ($guardar) {
                $_SESSION['usuario']['nombre'] = $nombres;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;
                $_SESSION['completado'] = 'Tus datos se han actualizado con éxito.';
            } else {
                $_SESSION['errores']['general'] = 'Falla al actualizar tus datos!';
            }
        }else{
            $_SESSION['errores']['general'] = "El usuario ya existe!!";
	}
    } else {
        $_SESSION['errores'] = $errores;
    }
}

header('Location: mis-datos.php');

