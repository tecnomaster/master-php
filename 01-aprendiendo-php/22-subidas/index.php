<DOCTYPE! HTML>
    </DOCTYPE>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Subir archivos PHP</title>
    </head>

    <body>
        <h1>Subir imágenes PHP</h1>
        <form action='upload.php' method='POST' enctype='multipart/form-data'>
            <p><label for='titulo'>Archivo:</label>
                <input type='file' name='archivo'></input></p>
            <p><input type='submit' value='Enviar'></input></p>
        </form>
        <?php
        echo '<hr><h1>Listado de Imágenes:</h1>';

        if ($gestor = opendir('./images')) {
            while (false !== ($imagen = readdir($gestor))) {
                if ('.' !== $imagen && '..' !== $imagen) {
                    echo "<img src='images/{$imagen}' width='200px'><br>";
                }
            }
        }
        ?>
    </body>

    </html>