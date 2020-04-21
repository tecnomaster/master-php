<?php
    require_once 'includes/conexion.php';
    require_once 'includes/ayudas.php';
 ?>
<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>

<body>
    <!-- CABECERA-->
    <header id="cabecera">
        <!-- Logo-->
        <div id='logo'>
            <a href='index.php'>
                Blog de Videojuegos
            </a>
        </div>

        <!-- MENÚ-->
        <nav id='menu'>
            <ul>
                <li>
                    <a href='index.php'>Inicio</a>
                </li>
                <?php
                    $categorias = conseguirCategorias($db);
                    if (!empty($categorias)) {
                        while ($categoria = mysqli_fetch_assoc($categorias)) {
                            ?>
                                <li>
                                    <a href="categoria.php?id=<?=$categoria['id'];?>"><?=$categoria['nombre']?></a>
                                </li>
                            <?php
                        }
                    }?>
                <li>
                    <a href='index.php'>Sobre mí</a>
                </li>
                <li>
                    <a href='index.php'>Contacto</a>
                </li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
    <div id='contenedor'>