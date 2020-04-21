<?php
/*
Los arrays son colecciones o conjuntos de datos/valores, bajo un único nombre.
Para acceder a esos valores podemos usar un índice numérico o alfanumérico
*/
$pelicula = 'Batman';
$peliculas = ['La vendedora de rosas', 'Spiderman', 'El señor de los rastrillos'];
$cantantes = ['David Bisbal', 'La tigresa del oriente', 'Wendy Sulca'];
echo $peliculas[0];
echo '</br>';
echo $cantantes[2];
//Recorrer arrays con bucle for
echo '<h1> Listado de peliculas </h1>';
echo '<ul>';
for ($i = 0; $i < count($peliculas); ++$i) {
    echo '<li>'.$peliculas[$i].'</li>';
}
echo '</ul>';
//Recorrer arrays con foreach
echo '<h1> Listado de cantantes </h1>';
echo '<ul>';
foreach ($cantantes as $cantante) {
    echo '<li>'.$cantante.'</li>';
}
echo '</ul>';
echo '</br>';
//Array asociativo
$personas = [
    'nombre' => 'Elena',
    'apellidos' => 'Correa',
    'web' => 'youtube.com',
];
echo $personas['apellidos'];
echo '</br>';

//Arrays multidimensionales
$contactos = [
    [
        'nombre' => 'Elba Lazo',
        'email' => 'notengocorreo@elba_lazo.com',
    ],
    [
        'nombre' => 'Zoyla Alegría',
        'email' => 'notengocorreo@zoyla_alegria.com',
    ],
    [
        'nombre' => 'Lucila Tanga',
        'email' => 'notengocorreo@lucila_tanga.com',
    ],
    [
        'nombre' => 'Salome Terán de Cabeza',
        'email' => 'salome@teran_decabeza.com',
    ],
    [
        'nombre' => 'Benito Camelot',
        'email' => 'benito@camelot.com',
    ],
];
foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}