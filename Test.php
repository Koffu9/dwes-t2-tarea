<?php

require_once 'clases/Miembro.php';
require_once 'clases/Alumno.php';
require_once 'clases/Profesor.php';
require_once 'clases/Asignatura.php';
require_once 'clases/TriangleGenerator.php';

$miembro = new Miembro(1, "Carlos", "Pérez", "carlos@ejemplo.com");
echo "<h2>Miembro</h2>";
echo "<pre>$miembro</pre>";

$alumno = new Alumno(2,"Ana","López","ana@ejemplo.com",20,[],false 
);

echo "<h2>Alumno inicial</h2>";
echo "<pre>";
var_dump($alumno);
echo "</pre>";

$alumno->abonarCurso();

echo "<h2>Alumno después de abonarCurso()</h2>";
echo "<pre>";
var_dump($alumno);
echo "</pre>";

$profesor = new Profesor(3, "Juan", "García", "juan@ejemplo.com");
$asignatura = new Asignatura(101, "DWES", 6);

echo "<h2>Profesor</h2>";
echo "<pre>";
echo($profesor);
echo "</pre>";

echo "<h2>Asignatura</h2>";
echo "<pre>";
var_dump($asignatura);
echo "</pre>";

$asignaturas = Asignatura::crearAsignaturasDeMuestra();
$profesores  = Profesor::crearProfesoresDeMuestra();
$alumnos     = Alumno::crearAlumnosDeMuestra($asignaturas);

echo "<h2>Ejemplos</h2>";

echo "<pre>";
var_dump($asignaturas);
var_dump($profesores);
var_dump($alumnos[0]);
echo "</pre>";

echo "<pre>";
$triangulo = TriangleGenerator::generateTriangle(6);
echo "$triangulo";
echo "</pre>";

$asignaturas=Asignatura::crearAsignaturasDeMuestra();
$profesores=Profesor::crearProfesoresDeMuestra();
$alumnos = Alumno::crearAlumnosDeMuestra($asignaturas);
echo "<h2> Alumnos </h2>";
echo "<ul>";
foreach($alumnos as $alumno){
    echo "<li>";
    var_dump($alumno);
    echo "</li>";
}
echo "</ul>";