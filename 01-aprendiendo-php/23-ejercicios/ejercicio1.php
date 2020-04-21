<?php

/*Crear una sesión que aumente/disminuya su valor en 1 en función de si el valor
en get counter está en uno o cero*/

session_start();
if (!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = 0;
}

if (isset($_GET['counter']) && 1 == $_GET['counter']) {
    ++$_SESSION['numero'];
}

if (isset($_GET['counter']) && 0 == $_GET['counter']) {
    --$_SESSION['numero'];
}

?>
<h1>El valor de la sesión es: <?php echo $_SESSION['numero']; ?></h1><br>
<a href='ejercicio1.php?counter=1'>Aumentar valor</a><br>
<a href='ejercicio1.php?counter=0'>Disminuir valor</a>