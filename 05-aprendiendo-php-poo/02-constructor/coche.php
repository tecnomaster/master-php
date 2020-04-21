<?php
// Programación Orientada a Objetocs con PHP (POO)

// Ddefinir una clase molde para crear más objetos de tipo coche con características parecidas

class Coche {
    // Atributos o Propiedades (equivalentes a las variables de programación estructurada)
    
    // PUBLIC: Podemos acceder desde cualquier lugar, dentro de la clase actual
    //         dentro de clases que heredan esta clase o fuera de la clase
    public $color;
    
    // PROTECTED: Podemos acceder desde la clase que los define y desde clases
    //         que heredan esta clase
    protected $marca;
    
    // PRIVATE: Unicamente se puede acceder desde esta clase    
    private $modelo;
    
    public $velocidad;
    public $caballaje;
    public $plazas;
    
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje,$plazas) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }
    
    // Métodos, son acciones que hace el objeto (equivalentes a funciones)
    public function getColor() {
        // Busca en esta clase la propiedad x
        return $this ->color;
    }
    
    public function setColor($color) {
        $this->color = $color;
    }
    
    public function acelerar() {
        $this->velocidad++;
    }
    
    public function frenar() {
        $this->velocidad--;
    }
    
    public function getVelocidad() {
        return $this->velocidad;
    }
   
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
    public function getModelo() {
        return $this->modelo;
    }
    
    public function mostrarInformacion(Coche $miObjeto) {
        
        if(is_object($miObjeto)){
            $informacion = "<h1>Información del coche</h1>";
            $informacion .= "<b>Marca:</b> ".$miObjeto->marca."<br>";
            $informacion .= "<b>Modelo:</b> ".$miObjeto->modelo."<br>";
            $informacion .= "<b>Color:</b> ".$miObjeto->color."<br>";
            $informacion .= "<b>Velocidad:</b> ".$miObjeto->velocidad."<br>";
            $informacion .= "<b>Caballaje:</b> ".$miObjeto->caballaje."<br>";
            $informacion .= "<b>Plazas:</b> ".$miObjeto->plazas."<br>";
        }else{
            $informacion = "Tu dato es este: $miObjeto";
        }
        return $informacion;
    }
    
} // Fin definición de la clase
