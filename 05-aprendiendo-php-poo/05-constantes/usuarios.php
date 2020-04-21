<?php

class Usuario {
    
    const URL_COMPLETA = 'http://localhost';

    public $email;
    public $password;
    
    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setPassword($password): void {
        $this->password = $password;
    }

}

//$usuario = new Usuario();
//var_dump($usuario);
//echo $usuario::URL_COMPLETA;

echo Usuario::URL_COMPLETA;


