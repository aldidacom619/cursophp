<?php
echo "OPERADOR IF";
echo "<br>";

$numero1 = 15 + 20;
$numero2 = 20 * 5;

echo "el numero1 es igual a:".$numero1." y el valor del numero2 es:". $numero2; 

echo "<br>";
echo "<br>";
if ($numero1 > $numero2) {
	echo "El numero1 es mayor";
}
else
{
	echo "El numero2 es mayor";
}

echo "<br>";
echo "<br>";

$numero3 = 30;
if($numero3%2 == 0)
{
	echo "el numero".$numero3." es par";
}	
else
{
	echo "el numero".$numero3."es impar";
}

?>