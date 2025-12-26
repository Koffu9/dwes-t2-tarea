<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
require_once 'clases/Miembro.php';
require_once 'clases/Alumno.php';
require_once 'clases/Profesor.php';
require_once 'clases/Asignatura.php';
require_once 'clases/TriangleGenerator.php';

$asignaturas=Asignatura::crearAsignaturasDeMuestra();
$profesores=Profesor::crearProfesoresDeMuestra();
$alumnos = Alumno::crearAlumnosDeMuestra($asignaturas);
echo "<h2> Alumnos </h2>";
echo "<ul>";
foreach($alumnos as $alumno){
    echo "<li>";
    echo $alumno;
    echo "</li>";
}
echo "</ul>";

echo "<h2> Profesores </h2>";
echo "<ul>";
foreach($profesores as $profesor){
    echo "<li>";
    echo $profesor;
    echo "</li>";
}
echo "</ul>";

echo "<h2> Asignaturas </h2>";
echo "<ul>";
foreach($asignaturas as $asignatura){
    echo "<li>";
    echo $asignatura;
    echo "</li>";
}
echo "</ul>";
$alumnosMenores = array_filter($alumnos, function($alumno){
    return $alumno->getEdad()<=23;
});
echo "<h2> Alumnos <= 23 </h2>";
echo "<ul>";
foreach($alumnosMenores as $alumno){
    echo "<li>";
    echo $alumno;
    echo "</li>";
}
echo "</ul>";


$almenosDos = array_filter($alumnos, function($alumno){
    return count($alumno->getAsignaturas())>1;
});
echo "<h2> Alumnos con almenos dos asignaturas </h2>";

echo "<ul>";
foreach($almenosDos as $alumno){
    echo "<li>";
    echo $alumno;
    echo "</li>";
}
echo "</ul>";

echo "<h2> Asignaturas con almenos un Alumno matriculado </h2>";
$asigConAlumnos = [];
foreach($alumnos as $alumno){
    foreach($alumno->getAsignaturas() as $alumnoasg){
        $asigConAlumnos[$alumnoasg->getId()]=$alumnoasg;
}
}

echo "<ul>";
foreach($asigConAlumnos as $asignatura){
echo "<li>";
echo $asignatura;
echo "</li>";
}
echo "</ul>";
?>    
</body>
</html>