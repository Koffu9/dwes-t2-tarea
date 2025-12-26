<?php
class Miembro {
private $id;
private $nombre;
private $apellidos;
private $email;

function __construct($id,$nombre,$apellidos,$email){
    $this -> id = $id;
    $this -> nombre = $nombre;
    $this -> apellidos = $apellidos;
    $this -> email = $email;
}

public function getId(){
    return $this -> id;
}

public function setId($nuevoId){
    $this -> id=$nuevoId;
}

public function getNombre(){
    return $this -> nombre;
}

public function setNombre($nuevoNombre){
    $this -> nombre=$nuevoNombre;
}


public function getApellidos(){
    return $this -> apellidos;
}

public function setApellidos($nuevoApellidos){
    $this -> apellidos=$nuevoApellidos;
}

public function getEmail(){
    return $this -> email;
}

public function setEmail($nuevoEmail){
    $this -> email=$nuevoEmail;
}

public function __toString() {
    return "Nombre: {$this->nombre} " . "{$this->apellidos} " .
           "Email: {$this->email}\n";
}
}


