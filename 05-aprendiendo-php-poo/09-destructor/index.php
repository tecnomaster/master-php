<?php

class usuario {
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = 'Daniel Rodriguez';
        $this->email = 'drodriguez@tecnosoluciones.com';
    
        echo 'Creando el objeto <br>';       
    }
    
    public function __toString() {
        return "Hola {$this->nombre}, estás registrado con {$this->email}";
    }
    
    public function __destruct() {
        echo '<br>Destruyendo el Objeto';
    }
}

$usuario = new usuario();
/*for ($i=0; $i<=10; $i++) {
    echo $i.'<br>';
}*/
//echo $usuario->email;
echo $usuario;



