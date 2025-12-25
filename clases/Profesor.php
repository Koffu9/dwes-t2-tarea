<?php

class Profesor extends Miembro{

private $titular = false;
private $asignatura;

function __construct($id, $nombre, $apellidos, $email)
{
    parent::__construct($id, $nombre, $apellidos, $email);
    $this -> titular=false;
}

public function getTitular(){
    return $this -> titular;
}

public function setTitular($nuevoTitular){
    $this -> titular=$nuevoTitular;
}

public function getAsignatura(){
    return $this -> asignatura;
}

public function setAsignatura($nuevaAsignatura){
    $this -> asignatura=$nuevaAsignatura;
}

public static function crearProfesoresDeMuestra(){

    $profesores=[];

    $profesores[] = new Profesor(1, "Steve Wozniak", "steve@apple.com", "DWES.");
    $profesores[] = new Profesor(2, "Ada Lovelace", "ada@gmail.com", "DIW.");
    $profesores[] = new Profesor(3, "Taylor Otwell", "taylor@laravel.com", "DWEC.");
    $profesores[] = new Profesor(4, "Rasmus Lerdoff", "rasmus@php.com", "DAW.");

    return $profesores;
}

}
