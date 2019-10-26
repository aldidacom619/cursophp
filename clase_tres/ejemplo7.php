<?php
function calcular_area($altura,$base)
{
	$divide = 2;
	$areatriangulo = ($altura*$base)/$divide;
	return $areatriangulo;
}

echo "FUNCIONES<br><br><br>";

echo $area1;
echo "<br><br><br>";
$altura = 15;
$base = 4;

$triangulo1 = calcular_area($altura,$base);

echo "el area del triangulo1 es:".$triangulo1."<br>";

$altura = 115;
$base = 50;

$triangulo2 = ($altura*$base)/2;

echo "el area del triangulo2 es:".$triangulo2."<br>";
?>