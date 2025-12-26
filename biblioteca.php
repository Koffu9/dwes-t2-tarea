<?php
$libros = [
 "libro1" => [
 "titulo" => "PHP para Principiantes",
 "autor" => "Carlos Ruiz",
 "precio" => 19.99,
 "categoria" => "Desarrollo web"
 ],
 "libro2" => [
 "titulo" => "JavaScript Avanzado",
 "autor" => "Laura García",
 "precio" => 25.99,
 "categoria" => "Desarrollo web"
 ],
 "libro3" => [
 "titulo" => "Algoritmos en Python",
 "autor" => "Miguel Fernández", 
 "precio" => 29.99,
 "categoria" => "Algoritmos"
 ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
        <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px 10px;
        }
    </style>
</head>
<body>
<h2>Informacion de todos los libros </h2>
<table>
    <tr>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Precio</th>
        <th>Categoria</th>
    </tr>
    <?php  
    foreach($libros as $libro){
        echo "<tr>";
        echo "<td>" . $libro["titulo"] . "</td>";
        echo "<td>" . $libro["autor"] . "</td>";
        echo "<td>" . $libro["precio"] . "€</td>";
        echo "<td>" . $libro["categoria"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>  
<h2>Libros de la categoria 'Desarrollo Web'</h2>
<ol>
    <?php
    
    foreach($libros as $libro){
        if($libro["categoria"]=="Desarrollo web"){
            echo "<li>" . $libro["titulo"] . "</li>";
        }
    }
    ?>
</ol>  


</body>
</html>
