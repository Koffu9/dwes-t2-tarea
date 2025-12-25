<?php
class Alumno extends Miembro {

private $edad;
private $asignaturas = array();
private $cursoAbonado = false;


function __construct($id, $nombre, $apellidos, $email,$edad)
{
    parent::__construct($id, $nombre, $apellidos, $email);
    $this -> edad=$edad;
}

public function getEdad(){
    return $this -> edad;
}

public function setEdad($nuevaEdad){
    $this -> edad=$nuevaEdad;
}

public function getAsignaturas(){
    return $this -> asignaturas;
}

public function getCursoAbonado(){
    return $this -> cursoAbonado;
}


public function abonarCurso(){
    $this -> cursoAbonado = true;
}

public function matricularEnAsignatura(Asignatura $asignatura){
    foreach ($this->asignaturas as $AsignaturaRepe){
        if($AsignaturaRepe->getId()==$asignatura->getId()){
            return;
        }
    }
    $this -> asignaturas[]=$asignatura;
}

public static function crearAlumnosDeMuestra(array $asignaturas){

    $alumnos[] = new Alumno(1, "Laura", "Martínez", "laura.martinez@email.com", 22);
    $alumnos[] = new Alumno(2, "Sergio", "López", "sergio.lopez@email.com", 25);
    $alumnos[] = new Alumno(3, "Carlos", "García", "carlos.garcia@email.com", 24);
    $alumnos[] = new Alumno(4, "Marta", "Sánchez", "marta.sanchez@email.com", 23);
    $alumnos[] = new Alumno(5, "Alba", "Fernández", "alba.fernandez@email.com", 21);
    $alumnos[] = new Alumno(6, "David", "Rodríguez", "david.rodriguez@email.com", 26);
    $alumnos[] = new Alumno(7, "Lucía", "Jiménez", "lucia.jimenez@email.com", 20);
    $alumnos[] = new Alumno(8, "Jorge", "Pérez", "jorge.perez@email.com", 22);
    $alumnos[] = new Alumno(9, "Elena", "Romero", "elena.romero@email.com", 23);
    $alumnos[] = new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24);

    $alumnos[0]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[1]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[1]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[2]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[2]->matricularEnAsignatura($asignaturas[2]);
    $alumnos[3]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[4]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[4]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[4]->matricularEnAsignatura($asignaturas[2]);
    $alumnos[5]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[6]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[6]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[7]->matricularEnAsignatura($asignaturas[2]);
    $alumnos[8]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[9]->matricularEnAsignatura($asignaturas[0]);

    return $alumnos;
}
}
