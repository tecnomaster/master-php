<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Imprimir en Pantalla - Master PHP</title>
    </head>
    <body>
        <h1>Imprimir en Pantalla - <?php echo 'TecnoMaster PHP'; ?></h1>
        <?='Bienvenido al Curso de PHP'?>
        <?php
            $juego="MarioBross";
            echo "<h3>Lista de Video Juegos:</h3>";
            // Comentario 1
            echo "<ul>"
                ."<li>$juego</li>"
                ."<li>Juego 2</li>"
                ."<li>Juego 3</li>"
                ."</ul>";
            // Comentario 2
            echo "<p>Esa es la Lista" . " - " . "de video juegos</p>";    
            /*
            Este es el comentario en Bloque
            */
        ?>
    </body>
</html>