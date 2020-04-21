<?php

if (isset($_COOKIE['miCookie'])) {
    echo '<h1>'.$_COOKIE['miCookie'].'</h1><br>';
} else {
    echo 'No existe la cookie';
}

if (isset($_COOKIE['unYear'])) {
    echo '<h1>'.$_COOKIE['unYear'].'</h1>';
} else {
    echo 'No existe la cookie';
}