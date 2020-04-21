<?php
 
if (isset($_POST)) {
    // Conexión a la base de datos
    require_once 'includes/conexion.php';
        
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    $usuario = $_SESSION['usuario']['id'];
  
    // Arreglo de Errores
    $errores = [];

    // Validar datos antes de guardarlos en la base de datos

    // Validar campo titulo
    if (empty($titulo)) {
        $errores['titulo'] = 'El titulo no es válido';
    }

    // Validar campo descripcion
    if (empty($descripcion)) {
        $errores['descripcion'] = 'La descripción no es válida';
    }

    // Validar campo categoria
    if (empty($categoria) || !is_numeric($categoria)) {
        $errores['categoria'] = 'La categoria no es válida';
    }

    //var_dump($errores);
    //die();
    
    if (count($errores) == 0){
        $sql = "INSERT INTO entradas VALUES(null, $usuario, $categoria, '$titulo', '$descripcion', CURDATE()); ";
        $guardar = mysqli_query($db, $sql);
        header ("Location: index.php");
    }else{
        $_SESSION["errores_entrada"] = $errores;
        header ("Location: crear-entrada.php");
    }

}
