<DOCTYPE! HTML>
    <html lang='es'>

    <head>
        <meta charset='utf-8'>
        <title>Formulario</title>
    </head>

    <body>
        <p>
            <form method="GET" action=''>
                <label>Primer Número:</label><input name='campo1' type='number'><br>
                <label>Segundo Número:</label><input name='campo2' type='number'><br>
                <input type='submit' name='boton' value='Enviar'>
            </form>

            <?php

                if (isset($_GET['campo1'], $_GET['campo2'])) {
                    $campo1 = $_GET['campo1'];
                    $campo2 = $_GET['campo2'];
                    if (('' != $campo1) && ('' != $campo2)) {
                        if ($campo2 > $campo1) {
                            for ($i = $campo1; $i <= $campo2; ++$i) {
                                echo $i.', ';
                            }
                        } else {
                            echo 'El segundo número debe ser mayor que el primero';
                        }
                    } else {
                        echo 'Los campos del formulario no pueden estar vacíos';
                    }
                } else {
                    echo 'Introduzca los números en el formulario';
                }
            ?>
        </p>
        </form>
    </body>

    </html>