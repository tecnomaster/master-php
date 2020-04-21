<?php
// Programación Orientada a Objetocs con PHP (POO)

// Ddefinir una clase molde para crear más objetos de tipo coche con características parecidas

class Coche {
    // Atributos o Propiedades (equivalentes a las variables de programación estructurada)
    public $color = "Rojo";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $marca = "Ferrari";
    public $caballaje = 500;
    public $plazas = 2;
    
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
    
    
} // Fin definición de la clase

// Crear un objeto / Instanciar la clase
$coche = new Coche();

//var_dump($coche);

// Usar los métodos
$coche->setColor("Amarillo");
echo '<b>El color del coche es:</b> '.$coche->getColor().'<br>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo '<b>La velocidad del coche es:</b> '.$coche->getVelocidad().'<br>';
echo '<b>El modelo del coche es:</b> '.$coche->getModelo().'<br>';
echo '<br>';
$coche2 = new Coche();
$coche2->setColor("Verde");
$coche2->setModelo("Gallardo");
echo '<b>El color del segundo coche es:</b> '.$coche2->getColor().'<br>';
echo '<b>El modelo del segundo coche es:</b> '.$coche2->getModelo().'<br>';
echo '<br>';


