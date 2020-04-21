<?php

class persona {
    private $nombre;
    private $edad;
    private $ciudad;
    
    public function __construct($nombre, $edad, $ciudad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }
    
    public function __call($name, $arguments) {
        $prefijo_metodo = substr($name, 0, 3);
        
        if($prefijo_metodo == 'get'){
            $nombre_metodo = substr(strtolower($name), 3);
                    //$this->nombre
            return $this->$nombre_metodo;
        }
        return $nombre_metodo;
    }
}

$persona = new Persona('Daniel', 54, 'Medellín');
echo $persona->getNombre();


