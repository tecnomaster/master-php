<?php

require_once 'configuracion.php';

Configuracion::setColor("blue");
Configuracion::setEntorno("Localhost");
Configuracion::setNewsletter(true);

echo '<b>Color: </b>'.Configuracion::$color;
echo '<br><b>Color: </b>'.Configuracion::$entorno;
echo '<br><b>Color: </b>'.Configuracion::$newsletter;

$configuracion = new Configuracion();
$configuracion::$color = "red";
echo '<br><br><b>Color: </b>'.$configuracion::$color;

var_dump($configuracion);


