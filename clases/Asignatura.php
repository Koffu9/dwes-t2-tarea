<?php
class Asignatura {

private $id;
private $nombre;
private $creditos;

function __construct($id,$nombre,$creditos){
    $this -> id=$id;
    $this -> nombre=$nombre;
    $this -> creditos=$creditos;
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

public function getCreditos(){
    return $this -> creditos;
}

public function setCreditos($nuevoCreditos){
    $this -> creditos=$nuevoCreditos;
}

public static function crearAsignaturasDeMuestra(){

    $asignaturas= [];
    $asignaturas[]= new Asignatura(1,"DWES","7 créditos");
    $asignaturas[]= new Asignatura(2,"DWEC","6 créditos");
    $asignaturas[]= new Asignatura(3,"DIW","4 créditos");
    $asignaturas[]= new Asignatura(4,"DAW","4 créditos");

    return $asignaturas;
}

public function __toString() {
    return "Nombre: {$this->nombre} " . "Creditos: {$this->creditos}\n";
}

}
