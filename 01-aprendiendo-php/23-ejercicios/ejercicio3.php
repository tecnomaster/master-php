<?php
/*
- Crear Calculadora con formulario y 2 inputs
- +, -, /, *
- Muestre resultado en pantalla
*/
?>
<DOCTYPE! HTML>
    </DOCTYPE>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
    </head>

    <body>
        <h1>Calculadora</h1>
        <form action='calcular.php' method='POST' enctype='multipart/form-data'>
            <p><label for='numero1'>Número 1:</label>
                <input type='float' name='numero1'></input></p>
            <p><label for='numero2'>Número 2:</label>
                <input type='float' name='numero2'></input></p>
            <p><label for='op'>Operación:</label>
                <p><input type='submit' value='+' name='op'></input>
                    <input type='submit' value='-' name='op'></input>
                    <input type='submit' value='*' name='op'></input>
                    <input type='submit' value='/' name='op'></input></p>
        </form>
        <?php
        if (isset($_GET['resultado'])) {
            echo 'El resultado es: '.$_GET['resultado'];
        }
        ?>
    </body>

    </html>