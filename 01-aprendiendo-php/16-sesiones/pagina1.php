<?php

// Iniciar la sesión

session_start();

echo $variable_normal.'<br>';
echo $_SESSION['variable_persistente'];