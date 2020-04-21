<?php

trait Utilidades{
    public function mostrarNombre() {
       echo '<h1>El nombre es: '.$this->nombre.'</h1>'; 
    }
}

class Coche {
    public $nombre;
    public $marca;
    
    use Utilidades;
}

Class Persona {
    public $nombre;
    public $apellidos;
    
    use Utilidades;
}

Class VideoJuegos {
    public $nombre;
    public $anio;
    
    use Utilidades;
}

$coche = new Coche();
$coche->nombre = 'Ferrari Testarosa';

$persona = new Persona();
$persona->nombre = 'Pepe';

$videojuego = new VideoJuegos();
$videojuego->nombre = 'Destiny';

$coche->mostrarNombre();
$persona->mostrarNombre();
$videojuego->mostrarNombre();