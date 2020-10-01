<?php
//include 'triangulo.php';
require_once 'triangulo.php';
$base = $_POST["fbase"];
$altura = $_POST["faltura"];

$triangulo = new Triangulo($base,$altura);
echo "El area es: ".$triangulo->areaTriangulo();
echo "<br>";
echo "El perimetro es: ".$triangulo->perimetroTriangulo();
?>