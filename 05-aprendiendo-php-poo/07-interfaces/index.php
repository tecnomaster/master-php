<?php

interface Ordenador {
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();

}

class iMac implements Ordenador{
    private $modelo;
    function getModelo() {
        return $this->modelo;
    }

    function setModelo($modelo): void {
        $this->modelo = $modelo;
    }
    
    public function encender() {
        return "Nada";
    }
    public function apagar() {
        return "Nada";
    }
    public function reiniciar() {
        return "Nada";
    }
    public function desfragmentar() {
        return "Nada";
    }
    public function detectarUSB() {
        return "Nada";
    }
    
    

}

$mackintosh = new iMac();
$mackintosh->setModelo("MacBook Pro");

echo $mackintosh->getModelo();

var_dump($mackintosh);

