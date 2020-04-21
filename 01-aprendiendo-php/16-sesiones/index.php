<?php

// Iniciar la sesión

session_start();

//variable local
$variable_normal = 'soy una cadena de texto';

//variable de sesión
$_SESSION['variable_persistente'] = 'HOLA SOY UNA SESIÓN ACTIVA';

echo $variable_normal.'<br>';
echo $_SESSION['variable_persistente'];