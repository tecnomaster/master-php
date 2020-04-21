<DOCTYPE! HTML>
    <html lang='es'>

    <head>
        <meta charset='utf-8'>
        <title>Tablas de Multiplicar</title>
    </head>

    <body>
        <div align="center">
            <h1>Tablas de Multiplicar</h1>
        </div>
        <table align="center" border="1">
            <tr width='10%' align='center'>

                <?php
                    // Tablas de Multiplicar
                    for ($i = 1; $i <= 10; ++$i) {
                        echo '<td width="10%">';
                        echo '<b>Tabla del '.$i.'</b><br>';
                        for ($j = 1; $j <= 10; ++$j) {
                            echo $i.' * '.$j.' = '.($i * $j).'<br>';
                        }
                        echo '</td>';
                    }
                    ?>
            </tr>
        </table>
    </body>

    </html>