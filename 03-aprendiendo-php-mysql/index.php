<?php

// Conectar a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'phpmysql');

if ($conexion) {
    echo 'Funcionó la conexión<hr>';
} else {
    echo 'WTF! El error es: '.mysqli_connect_errno();
}

//Consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta SELECT
$query = mysqli_query($conexion, 'SELECT * FROM notas');

while ($nota = mysqli_fetch_assoc($query)) {
    //var_dump($nota);
    $color = $nota['color'];
    echo '<p style="color:'.$color.';">ID: '.$nota['id'].'<br>';
    echo 'Titulo: '.$nota['titulo'].'<br>';
    echo 'Descripción: '.$nota['descripcion'].'<br>';
    echo 'Color: '.$nota['color'].'</p>';
}

//Insertar en la base de datos en php

$sql = "INSERT INTO notas VALUES (null, 'Nota desde PHP', 'Esto es una nota desde PHP', 'green')";
$insert = mysqli_query($conexion, $sql);
if ($insert) {
    echo 'Datos insertados correctamente';
} else {
    echo 'Error: '.mysqli_connect_errno();
}