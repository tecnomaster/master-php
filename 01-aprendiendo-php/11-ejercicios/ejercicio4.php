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
                        //Suma
                        echo '<b>Suma:</b> '.($campo1 + $campo2);

                        //Resta
                        echo '<br><b>Resta:</b> '.($campo1 - $campo2);

                        //Multiplicación
                        echo '<br><b>Multiplicación:</b> '.($campo1 * $campo2);
                        if (0 != ($campo2)) {
                            //División
                            echo '<br><b>División:</b> '.($campo1 / $campo2);
                        } else {
                            echo '<br>El segundo número no puede ser cero para que se pueda hacer la división';
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