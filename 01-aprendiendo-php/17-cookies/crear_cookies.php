<?php

/*Crear Cookies
setcookie('nombre', 'valor solo texto', caducidad, ruta, dominio);
*/

// Cookie básica
setcookie('miCookie', 'valor de mi galleta');

//Cookie con expiración
setcookie('unYear', 'valor de mi cookie de 365 dias', time() + (60 * 60 * 24 * 365));

?>

<a href='ver_cookies.php'>Ver Cookies</a> | <a href='borrar_cookies.php'>Borrar Cookies</a>