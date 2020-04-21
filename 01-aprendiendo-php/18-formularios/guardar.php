<?php

if (isset($_POST['titulo'], $_POST['descripcion'])) {
    echo '<b>Título:</b> '.$_POST['titulo'];
    echo '<br><b>Descripción:</b> '.$_POST['descripcion'];
} else {
    echo 'Por favor llena el formulario';
}